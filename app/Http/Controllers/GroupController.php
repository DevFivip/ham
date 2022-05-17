<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\GroupType;
use App\Models\Location;
use App\Models\Social;
use App\Models\Subcategory;
use DateInterval;
use DateTime;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

use Intervention\Image\Facades\Image;

class GroupController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->home = new HomeController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
        $locations = Location::all();
        $categories = Category::all();
        $socialMedia = Social::all();
        $types = GroupType::all();
        $cookies = $this->home->ccookie($req);
        return view('group.create', compact('cookies', 'locations', 'categories', 'socialMedia', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function slugfy($text, $length = null)
    {
        $replacements = [
            '<' => '', '>' => '', '-' => ' ', '&' => '', '"' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae', 'Ä' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae', 'Ç' => 'C', "'" => '', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D', 'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E', 'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G', 'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I', 'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'L', 'Ľ' => 'L', 'Ĺ' => 'L', 'Ļ' => 'L', 'Ŀ' => 'L', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N', 'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'Oe', 'Ö' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O', 'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S', 'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T', 'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U', 'Ü' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U', 'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z', 'Ż' => 'Z', 'Þ' => 'T', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'ae', 'ä' => 'ae', 'å' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a', 'æ' => 'ae', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c', 'ď' => 'd', 'đ' => 'd', 'ð' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e', 'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h', 'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i', 'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j', 'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l', 'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n', 'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'oe', 'ö' => 'oe', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o', 'ŏ' => 'o', 'œ' => 'oe', 'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ś' => 's', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'ue', 'ū' => 'u', 'ü' => 'ue', 'ů' => 'u', 'ű' => 'u', 'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y', 'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'α' => 'a', 'ß' => 'ss', 'ẞ' => 'b', 'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', '.' => '-', '€' => '-eur-', '$' => '-usd-'
        ];
        // Replace non-ascii characters
        $text = strtr($text, $replacements);
        // Replace non letter or digits with "-"
        $text = preg_replace('~[^\pL\d.]+~u', '-', $text);
        // Replace unwanted characters with "-"
        $text = preg_replace('~[^-\w.]+~', '-', $text);
        // Trim "-"
        $text = trim($text, '-');
        // Remove duplicate "-"
        $text = preg_replace('~-+~', '-', $text);
        // Convert to lowercase
        $text = strtolower($text);
        // Limit length
        if (isset($length) && $length < strlen($text))
            $text = rtrim(substr($text, 0, $length), '-');

        return $text;
    }
    public function store(Request $request)
    {

        // try {
        $request->validate([
            "name" => 'required|max:50',
            "url" => 'required|unique:groups|max:255|url',
            "group_type_id" => 'required',
            "social_id" => 'required',
            "categoria_id" => 'required',
            "subcategoria_id" => 'required|exists:subcategories,id',
        ]);

        $data = $request->all();

        if (isset($data['avatar'])) {
            $image = $request->file('avatar');
            $filename = time() . '.' . $image->getClientOriginalName();
            $path = $request->avatar->storeAs('public/img', $filename);
            $data['imagen'] = $filename;

            // dd(public_path($path2));

            $img = Image::make($image);

            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('thumbnail/' . $filename));

            $img = Image::make($image);

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('avatar/' . $filename));
        }


        $data["slug"] = $this->slugfy($data['name'] . " " . Str::random(3));
        $data["user_id"] = auth()->id();
        $data["description"] = $data["post-trixFields"]["content"];

        $date = new DateTime();
        $datesum = $date->add(new DateInterval('P15D'));

        // dd($datesum);

        $data["fecha_corte"] = $datesum;

        $g = Group::create($data);

        $grupos = Group::where('user_id', auth()->id())->with('social', 'type')->orderBy('id', 'ASC')->get();
        $message = ["status" => "success", "message" => "Grupo creado Perfectamente 👌"];

        return redirect(app()->getLocale() . '/home');
        // return view('home', compact('cookies','grupos', 'message'));

        // } catch (\Throwable $th) {
        //     dd('ERROR TRY', $th);
        // }
        //throw $th;




        //
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $lang,$id)
    {
        // dd($req,$lang,$id);

        $group = Group::find($id);
        $locations = Location::all();
        $categories = Category::all();
        $subcategoria = Subcategory::find($group->subcategoria_id);
        $socialMedia = Social::all();
        $types = GroupType::all();
        $cookies = $this->home->ccookie($req);
        return view("group.edit", compact('cookies', 'locations', 'categories', 'socialMedia', 'types', 'group', 'subcategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang,$id)
    {


        $data = $request->all();

        // try {
        $request->validate([
            "name" => 'required|max:30',
            "url" => ['url', 'required', Rule::unique('groups')->ignore($id)],
            "group_type_id" => 'required',
            "social_id" => 'required',
            "categoria_id" => 'required',
            "subcategoria_id" => 'required|exists:subcategories,id',
        ]);

        if (isset($data['avatar'])) {
            $image = $request->file('avatar');
            $filename = time() . '.' . $image->getClientOriginalName();
            $path = $request->avatar->storeAs('public/img/', $filename);
            $data['imagen'] = $filename;

            $img = Image::make($image);

            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('thumbnail/' . $filename));

            $img = Image::make($image);

            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('avatar/' . $filename));
        }


        $data["slug"] = $this->slugfy($data['name'] . " " . Str::random(3));
        $data["user_id"] = auth()->id();
        $data["description"] = $data["post-trixFields"]["content"];

        $g = Group::find($id);

        $g->update($data);


        $grupos = Group::where('user_id', auth()->id())->with('social', 'type')->orderBy('id', 'ASC')->get();
        $message = ["status" => "success", "message" => "Grupo creado Perfectamente 👌"];
        $cookies = $this->home->ccookie($request);
        return redirect(app()->getLocale() . '/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
