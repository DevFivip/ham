<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\PayPalPaymentController;
use App\Models\Category;
use App\Models\Group;
use App\Models\GroupType;
use App\Models\HistoryPayment;
use App\Models\Precio;
use App\Models\Social;
use App\Models\Subcategory;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

define('PAGINATION', 10);

Route::get('/', function () {

    $redes = Social::all();
    $mejores = Group::limit(10)->with(['social', 'categoria', 'subcategoria', 'location', 'type'])->get()->toArray();
    $redesSociales = Social::all();
    $listas = [];

    for ($i = 0; $i < count($redes); $i++) {
        $listas[$i] = [];
        $social = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->where('social_id', $redes[$i]->id)->limit(10)->get();
        array_push($listas[$i], $social->toArray());
    }
    return view('welcome', compact("mejores", "redes", "social", "listas", "redesSociales"));
});

Route::get("precios", function () {
    return view("precios");
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post("/getPayment", function (Request $req) {
    try {
        $data = $req->all();

        $token_id =  Crypt::decryptString($data['token']);
        if ($token_id == $data["gid"]) {
            $data["_id"] = $data['id'];
            $data["user_id"] = $data['uid'];
            $data["group_id"] = $token_id;

            $history =  HistoryPayment::create($data);

            if (!!$history) {
                $actual = new DateTime();
                $new_fecha_corte = $actual->add(new DateInterval('P15D'));
                $group = Group::find($token_id);
                $group->status = 1;
                $group->fecha_corte = $new_fecha_corte;
                $ups = $group->update();

                if (!!$ups) {
                    return response()->json(["status" => "success", 'mensaje' => "Grupo actualizado Perfectamente 👌"]);
                } else {
                    return response()->json(["status" => "error", 'mensaje' => "El pago paso a revision por favor espere ⌛"]);
                }
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
        return response()->json(["status" => "error", 'mensaje' => "El pago paso a revision por favor espere ⌛"]);
    }
});

Route::prefix('/home')->group(function () {
    Route::get('payment/{id}', function ($id) {

        $precios = [1 => '5.00', 2 => '3.00', 3 => '1.00'];
        $precio = $precios[auth()->user()->categoria_id];

        $group = Group::find($id);
        if (auth()->id() === $group->user_id) {
            $token = Crypt::encryptString($id);
            return view("payment", compact('group', 'precio', 'token'));
        } else {
            abort(404);
        }
    });

    Route::resource('/group', GroupController::class);
});


Route::get('/search', function (Request $req) {

    $data = $req->all();

    $query = [];

    $params = array_keys($data);


    for ($i = 0; $i < count($params); $i++) {
        $param = $params[$i];
        if (!!$data[$param]) {
            if ($param !== 'page') {

                $r = [
                    $param, 'like', "%" . $data[$param] . "%"
                ];
                array_push($query, $r);
            }
        }
    }

    try {
        $search = true;
        $redesSociales = Social::all();
        $socialMedia = null;
        $categorias = Category::all();
        $mejores = Group::where($query)->with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->paginate(PAGINATION);

        $breadcrumbs = [
            ["name" =>  "Inicio", "link" => "/"],
            ["name" =>  "Buscador", "link" => "/search"]
        ];

        return view('social', compact("mejores", 'categorias', 'redesSociales', 'search', 'socialMedia', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});

Route::get('/{social}/{type}/categoria/{category}/{subcategory}/{group_slug}', function (Request $req, $social, $type, $category, $subcategory, $group_slug) {

    $cookie_de_visita = $req->cookie('__VID');


    if (!$cookie_de_visita) {
        $cookie = "";
    } else {
        try {
            $cookie = Crypt::decryptString($cookie_de_visita);
        } catch (\Throwable $th) {
            $cookie = "";
        }
    }

    $arr_coo =  explode(" ", $cookie);

    // dd($arr_coo);

    try {
        $redesSociales = Social::all();
        $socialMedia = Social::where("name", $social)->first();
        $categorias = Category::all();
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where('social_id', $socialMedia->id)->paginate(PAGINATION);
        $group = Group::where("slug", $group_slug)->first();

        /**cookie de visita */


        $key = array_search($group->id, $arr_coo);

        if ($key === false) {
            $cookie .= "$group->id ";
            Visitor::create([
                "ip" => $req->ip(),
                "group_id" => $group->id,
                "clicked" => false
            ]);
        }

        $cookie = Crypt::encryptString($cookie);

        /**end cookie de visita */
        return response(view('viewGroup', compact("mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', "group")))->cookie('__VID', $cookie, time() * 365 * 5);
    } catch (\Throwable $th) {
        abort(404);
    }
});


// Route::get('categoria/{category_slug}/{subcategoria}', function (Request $req, $category_slug, $subcategoria) {
//     try {
//         $redesSociales = Social::all();
//         $categorias = Category::all();
//         $categoryGroup = Category::where("slug", $category_slug)->first();
//         $subcategoria = Subcategory::where([['categoria_id', $categoryGroup->id]])->get();
//         $title = ["name" => "Categoria", "description" => $categoryGroup->name, "slug" => $categoryGroup->slug];
//         $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([["categoria_id", $categoryGroup->id], ["subcategoria_id", $subcategoria->id]])->paginate(PAGINATION);
//         return view('social', compact("mejores", 'categorias', 'redesSociales', 'title'));
//     } catch (\Throwable $th) {
//         abort(404);
//     }
// });


Route::get('/categoria/{category_slug}', function (Request $req, $category_slug) {
    try {
        $redesSociales = Social::all();
        $categorias = Category::all();
        $categoryGroup = Category::where("slug", $category_slug)->first();
        $title = ["name" => "Categoria", "description" => $categoryGroup->name, "slug" => $categoryGroup->slug];
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([["categoria_id", $categoryGroup->id]])->paginate(PAGINATION);

        $breadcrumbs = [
            ["name" =>  "Inicio", "link" => "/"],
            ["name" =>  $categoryGroup->name, "link" => "/categoria/$categoryGroup->slug"],
        ];

        return view('social', compact("mejores", 'categorias', 'redesSociales', 'title', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});

Route::get('/subcategoria/{subcategory_slug}', function (Request $req, $subcategory_slug) {
    try {
        $redesSociales = Social::all();
        $categorias = Category::all();
        $subcategoryGroup = Subcategory::where("slug", $subcategory_slug)->first();
        $title = ["name" => "Categoria", "description" => $subcategoryGroup->name, "slug" => $subcategoryGroup->slug];
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([["subcategoria_id", $subcategoryGroup->id]])->paginate(PAGINATION);
        $categoriaRel = Category::find($subcategoryGroup->categoria_id);
        // dd($subcategoryGroup);
        // dd($categoriaRel);
        $breadcrumbs = [
            ["name" =>  "Inicio", "link" => "/"],
            ["name" =>  $categoriaRel->name, "link" => "/categoria/$categoriaRel->slug"],
            ["name" => $subcategoryGroup->name, "link" => "/subcategoria/$subcategoryGroup->slug"],
        ];

        return view('social', compact("mejores", 'categorias', 'redesSociales', 'title', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});



Route::get('/{social}', function (Request $req, $social) {
    try {

        $redesSociales = Social::all();
        $socialMedia = Social::where("name", $social)->first();
        $categorias = Category::all();
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where('social_id', $socialMedia->id)->paginate(PAGINATION);

        $breadcrumbs = [
            ["name" =>  $socialMedia->name, "link" => $socialMedia->slug],
        ];

        return view('social', compact("mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});


Route::get('/{social}/categoria/{category_slug}/{subcategory_slug}/', function (Request $req, $social, $category_slug, $subcategory_slug) {
    try {
        $redesSociales = Social::all();
        $socialMedia = Social::where("name", $social)->first();
        $categorias = Category::all();
        $categoryGroup = Category::where("slug", $category_slug)->first();
        $subcategoryGroup = Subcategory::where("slug", $subcategory_slug)->first();
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([['social_id', $socialMedia->id], ["categoria_id", $categoryGroup->id], ["subcategoria_id", $subcategoryGroup->id]])->paginate(PAGINATION);


        $breadcrumbs = [
            ["name" =>  "Inicio", "link" => "/"],
            ["name" =>  $socialMedia->name, "link" => "/$socialMedia->name"],
            ["name" =>  $categoryGroup->name, "link" => "/$socialMedia->name/categoria/$categoryGroup->slug"],
            ["name" =>  $subcategoryGroup->name, "link" => "/$socialMedia->name/categoria/$categoryGroup->slug/$subcategoryGroup->slug"],
        ];


        return view('social', compact("mejores", 'social', 'socialMedia', 'categorias', 'categoryGroup', 'subcategoryGroup', 'redesSociales', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});


Route::get('/{social}/categoria/{category_slug}/', function (Request $req, $social, $category_slug) {
    try {
        $redesSociales = Social::all();
        $socialMedia = Social::where("name", $social)->first();
        $categorias = Category::all();
        $categoryGroup = Category::where("slug", $category_slug)->first();
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([['social_id', $socialMedia->id], ["categoria_id", $categoryGroup->id]])->paginate(PAGINATION);

        $breadcrumbs = [
            ["name" =>  "Inicio", "link" => "/"],
            ["name" =>  $socialMedia->name, "link" => "/$socialMedia->name"],
            ["name" =>  $categoryGroup->name, "link" => "/$socialMedia->name/categoria/$categoryGroup->slug"],
        ];


        return view('social', compact("mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});




Route::get('/{social}/{type}', function (Request $req, $social, $type) {
    try {
        $redesSociales = Social::all();
        $socialMedia = Social::where("name", $social)->first();
        $typeSocialMediaGroup = GroupType::where("name", $type)->first();
        $categorias = Category::all();

        $breadcrumbs = [
            ["name" =>  "Inicio", "link" => "/"],
            ["name" =>  $socialMedia->name, "link" => "/$socialMedia->name"]
        ];

        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([['social_id', $socialMedia->id], ["group_type_id", $typeSocialMediaGroup->id]])->paginate(PAGINATION);
        return view('social', compact("mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'type', 'breadcrumbs'));
    } catch (\Throwable $th) {
        abort(404);
    }
});




// Route::get('/{social}/{type}/categoria/{category_slug}', function (Request $req, $social, $type, $category_slug) {
//     try {
//         $redesSociales = Social::all();
//         $socialMedia = Social::where("name", $social)->first();
//         $typeSocialMediaGroup = GroupType::where("name", $type)->first();
//         $categorias = Category::all();
//         $categoryGroup = Category::where("slug", $category_slug)->first();
//         $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([['social_id', $socialMedia->id], ["group_type_id", $typeSocialMediaGroup->id], ["categoria_id", $categoryGroup->id]])->paginate(PAGINATION);
//         return view('social', compact("mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'type'));
//     } catch (\Throwable $th) {
//         abort(404);
//     }
// });






Route::post('/subcategorias/{id}', function (Request $req, $id) {
    try {
        return Subcategory::where("categoria_id", $id)->get();
    } catch (\Throwable $th) {
        abort(404);
    }
});

Route::post('/statistics/{id}', function (Request $req, $id) {
    try {

        $v = Visitor::where('group_id', $id)->get();
        $total_view = $v->count();
        $total_click = $v->sum("clicked");

        return response()->json(["total_v" => $total_view, "total_click" => $total_click]);
    } catch (\Throwable $th) {
        abort(404);
    }
});

Route::post('/getUrl/{slug}', function (Request $req, $slug) {
    try {

        //get ip 
        $ip = $req->ip();

        $group = Group::where('slug', $slug)->first();
        $v = Visitor::where([["group_id", $group->id], ["ip", $ip]])->first();
        $v->clicked = true;
        $v->update();

        return response()->json(["url" => $group->url]);
    } catch (\Throwable $th) {
        abort(404);
    }
});
