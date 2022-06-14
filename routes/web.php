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
use Snipe\BanBuilder\CensorWords;
use Almazary\LaravelWordCensor\LaravelWordCensorFacade;

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

define('PAGINATION', 12);

function ccookie($req)
{
    $cookie_de_aceptacion = !$req->cookie('__CAC') ? true : false;
    $cookie_de_contenido_adulto = !$req->cookie('__CAD') ? true : false;
    return ["__CAC" => $cookie_de_aceptacion, "__CAD" => $cookie_de_contenido_adulto];
}

Route::get('/', function (Request $req) {

    try {
        $lang = $req->server()["HTTP_ACCEPT_LANGUAGE"];
        $lang = explode(',', $lang);

        $lang = explode('-', $lang[0]);
        return redirect($lang[0]);
    } catch (\Throwable $th) {

        $redes = Social::all();
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->limit(3)->get()->toArray();
        $mejores3 = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where('precio_membresia', 0)->inRandomOrder()->limit(3)->get();
        $mejores_onlyfans = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where("social_id", 3)->inRandomOrder()->limit(3)->get();
        $mejores_whatsapp = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where("social_id", 1)->inRandomOrder()->limit(3)->get();
        $mejores_telegram = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where("social_id", 2)->inRandomOrder()->limit(3)->get();
        $redesSociales = Social::all();
        $listas = [];

        for ($i = 0; $i < count($redes); $i++) {
            $listas[$i] = [];
            $social = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->where('social_id', $redes[$i]->id)->inRandomOrder()->limit(3)->get();
            array_push($listas[$i], $social->toArray());
        }
        $cookies = ccookie($req);
        return view('welcome', compact("cookies", "mejores", "mejores3", "mejores_onlyfans", "mejores_telegram", "mejores_whatsapp", "redes", "social", "listas", "redesSociales"));
    }
});

Route::get('/home', function (Request $req) {
    return redirect('/'.app()->getLocale() . '/home');
});


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
], function () {

    Route::get('/', function (Request $req) {
        $redes = Social::all();
        $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->limit(3)->get()->toArray();
        $mejores3 = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where('precio_membresia', 0)->inRandomOrder()->limit(3)->get();
        $mejores_onlyfans = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where("social_id", 3)->inRandomOrder()->limit(3)->get();
        $mejores_whatsapp = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where("social_id", 1)->inRandomOrder()->limit(3)->get();
        $mejores_telegram = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where("social_id", 2)->inRandomOrder()->limit(3)->get();
        $redesSociales = Social::all();
        $listas = [];

        for ($i = 0; $i < count($redes); $i++) {
            $listas[$i] = [];
            $social = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->where('social_id', $redes[$i]->id)->inRandomOrder()->limit(3)->get();
            array_push($listas[$i], $social->toArray());
        }
        $cookies = ccookie($req);
        return view('welcome', compact("cookies", "mejores", "mejores3", "mejores_onlyfans", "mejores_telegram", "mejores_whatsapp", "redes", "social", "listas", "redesSociales"));
    });

    Route::get("precios", function (Request $req) {
        $cookies = ccookie($req);
        $redesSociales = Social::all();
        return view("precios", compact('cookies', 'redesSociales'));
    });

    Auth::routes();

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/legal/politica-cookies', function (Request $req) {
        $cookies = ["__CAC" => false];
        return view("legal.cookies", compact('cookies'));
    });

    Route::get('/legal/politica-privacidad', function (Request $req) {
        $cookies = ccookie($req);
        return view("legal.privacidad", compact($cookies));
    });

    Route::get('/legal/terminos-y-condiciones', function (Request $req) {
        $cookies = ccookie($req);
        return view("legal.terminos_condiciones", compact('cookies'));
    });

    Route::get("/legal/autorizor-soy-mayor-de-edad", function (Request $req) {
        $cookies = ccookie($req);
        return view("legal.authorizeEdad", compact('cookies'));
    })->name('autorizarEdad');

    Route::prefix('/home')->group(function () {
        Route::get('payment/{id}', function (Request $req, $lang, $id) {
            $precios = [1 => '5.00', 2 => '3.00', 3 => '1.00'];
            $precio = $precios[auth()->user()->categoria_id];
            $redesSociales = Social::all();
            $group = Group::find($id);
            if (auth()->id() === $group->user_id) {
                $token = Crypt::encryptString($id);
                $cookies = ccookie($req);
                return view("payment", compact("cookies", 'group', 'precio', 'token', 'redesSociales'));
            } else {
                abort(404);
            }
        });

        Route::resource('/group', GroupController::class);
    });


    Route::get('/search', function (Request $req, $lang) {

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
            $mejores = Group::where($query)->with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->paginate(PAGINATION);

            if (!count($mejores)) {
                $rand = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->limit(50)->paginate(PAGINATION);
                $mejores = $rand;
            };

            $breadcrumbs = [
                ["name" =>  "Inicio", "link" => "/"],
                ["name" =>  "Buscador", "link" => "/search"]
            ];

            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'categorias', 'redesSociales', 'search', 'socialMedia', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });

    Route::get('/{social}/{type}/categoria/{category}/{subcategory}/{group_slug}', function (Request $req, $lang, $social, $type, $category, $subcategory, $group_slug) {

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


            $group = Group::where("slug", $group_slug)->first();
            $mejores = Group::whereNotIn('id', [$group->id])->with(['social', 'categoria', 'subcategoria', 'location', 'type'])->whereNotNull('fecha_corte')->where('social_id', $socialMedia->id)->inRandomOrder()->limit(11)->get();

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

            $censor = new LaravelWordCensorFacade();

            /**end cookie de visita */
            $cookies = ccookie($req);

            return response(view('viewGroup', compact("cookies", "mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', "group", 'censor')))->cookie('__VID', $cookie, time() * 365 * 5);
        } catch (\Throwable $th) {
            dd($th);
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

    //         return view('social', compact("cookies","mejores", 'categorias', 'redesSociales', 'title'));
    //     } catch (\Throwable $th) {
    //         abort(404);
    //     }
    // });


    Route::get('/categoria/{category_slug}', function (Request $req, $lang, $category_slug) {


        try {
            $redesSociales = Social::all();
            $categorias = Category::all();
            $categoryGroup = Category::where("slug", $category_slug)->first();
            $title = ["name" => "Categoria", "description" => $categoryGroup->name, "slug" => $categoryGroup->slug];
            $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->where([["categoria_id", $categoryGroup->id]])->paginate(PAGINATION);

            $breadcrumbs = [
                ["name" =>  "Inicio", "link" => "/"],
                ["name" =>  $categoryGroup->name, "link" => "/categoria/$categoryGroup->slug"],
            ];

            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'categorias', 'redesSociales', 'title', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });

    Route::get('/subcategoria/{subcategory_slug}', function (Request $req, $lang, $subcategory_slug) {
        try {
            $redesSociales = Social::all();
            $categorias = Category::all();
            $subcategoryGroup = Subcategory::where("slug", $subcategory_slug)->first();
            $title = ["name" => "Categoria", "description" => $subcategoryGroup->name, "slug" => $subcategoryGroup->slug];
            $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->where([["subcategoria_id", $subcategoryGroup->id]])->paginate(PAGINATION);
            $categoriaRel = Category::find($subcategoryGroup->categoria_id);
            // dd($subcategoryGroup);
            // dd($categoriaRel);
            $breadcrumbs = [
                ["name" =>  "Inicio", "link" => "/"],
                ["name" =>  $categoriaRel->name, "link" => "/categoria/$categoriaRel->slug"],
                ["name" => $subcategoryGroup->name, "link" => "/subcategoria/$subcategoryGroup->slug"],
            ];

            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'categorias', 'redesSociales', 'title', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });



    Route::get('/{social}', function (Request $req, $lang, $social) {
        try {

            $redesSociales = Social::all();
            $socialMedia = Social::where("name", $social)->first();
            $categorias = Category::all();
            $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->where('social_id', $socialMedia->id)->paginate(PAGINATION);

            $breadcrumbs = [
                ["name" =>  $socialMedia->name, "link" => $socialMedia->slug],
            ];

            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });


    Route::get('/{social}/categoria/{category_slug}/{subcategory_slug}/', function (Request $req, $lang, $social, $category_slug, $subcategory_slug) {
        try {
            $redesSociales = Social::all();
            $socialMedia = Social::where("name", $social)->first();
            $categorias = Category::all();
            $categoryGroup = Category::where("slug", $category_slug)->first();
            $subcategoryGroup = Subcategory::where("slug", $subcategory_slug)->first();
            $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->where([['social_id', $socialMedia->id], ["categoria_id", $categoryGroup->id], ["subcategoria_id", $subcategoryGroup->id]])->paginate(PAGINATION);


            $breadcrumbs = [
                ["name" =>  "Inicio", "link" => "/"],
                ["name" =>  $socialMedia->name, "link" => "/$socialMedia->name"],
                ["name" =>  $categoryGroup->name, "link" => "/$socialMedia->name/categoria/$categoryGroup->slug"],
                ["name" =>  $subcategoryGroup->name, "link" => "/$socialMedia->name/categoria/$categoryGroup->slug/$subcategoryGroup->slug"],
            ];


            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'social', 'socialMedia', 'categorias', 'categoryGroup', 'subcategoryGroup', 'redesSociales', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });


    Route::get('/{social}/categoria/{category_slug}/', function (Request $req, $lang, $social, $category_slug) {
        try {
            $redesSociales = Social::all();
            $socialMedia = Social::where("name", $social)->first();
            $categorias = Category::all();
            $categoryGroup = Category::where("slug", $category_slug)->first();
            $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->where([['social_id', $socialMedia->id], ["categoria_id", $categoryGroup->id]])->paginate(PAGINATION);

            $breadcrumbs = [
                ["name" =>  "Inicio", "link" => "/"],
                ["name" =>  $socialMedia->name, "link" => "/$socialMedia->name"],
                ["name" =>  $categoryGroup->name, "link" => "/$socialMedia->name/categoria/$categoryGroup->slug"],
            ];


            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });


    Route::get('/{social}/{type}', function (Request $req, $lang, $social, $type) {
        try {
            $redesSociales = Social::all();
            $socialMedia = Social::where("name", $social)->first();
            $typeSocialMediaGroup = GroupType::where("name", $type)->first();
            $categorias = Category::all();

            $breadcrumbs = [
                ["name" =>  "Inicio", "link" => "/"],
                ["name" =>  $socialMedia->name, "link" => "/$socialMedia->name"]
            ];

            $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('fecha_corte', 'desc')->where([['social_id', $socialMedia->id], ["group_type_id", $typeSocialMediaGroup->id]])->paginate(PAGINATION);
            $cookies = ccookie($req);
            return view('social', compact("cookies", "mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'type', 'breadcrumbs'));
        } catch (\Throwable $th) {
            abort(404);
        }
    });
});

// Route::get('/{social}/{type}/categoria/{category_slug}', function (Request $req, $social, $type, $category_slug) {
//     try {
//         $redesSociales = Social::all();
//         $socialMedia = Social::where("name", $social)->first();
//         $typeSocialMediaGroup = GroupType::where("name", $type)->first();
//         $categorias = Category::all();
//         $categoryGroup = Category::where("slug", $category_slug)->first();
//         $mejores = Group::with(['social', 'categoria', 'subcategoria', 'location', 'type'])->orderBy('id', 'desc')->where([['social_id', $socialMedia->id], ["group_type_id", $typeSocialMediaGroup->id], ["categoria_id", $categoryGroup->id]])->paginate(PAGINATION);
//         return view('social', compact("cookies","mejores", 'social', 'socialMedia', 'categorias', 'redesSociales', 'type'));
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
        $group = Group::where('slug', $slug)->first();
        return response()->json(["url" => $group->url]);
    }
});


Route::post('/acepted-cookies', function (Request $req) {
    try {
        return response()->json(["accepted" => true])->cookie('__CAC', true, time() * 365 * 5);;
    } catch (\Throwable $th) {
        abort(404);
    }
});


Route::post('/acepted-oldage', function (Request $req) {
    try {
        return response()->json(["accepted" => true])->cookie('__CAD', true, time() * 365 * 5);;
    } catch (\Throwable $th) {
        abort(404);
    }
});


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
})->middleware('auth');
