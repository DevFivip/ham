<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $cookies = $this->ccookie($req);
        $grupos = Group::where('user_id', auth()->id())->with('social', 'categoria', 'subcategoria', 'location', 'type')->orderBy('id', 'ASC')->get();
        $redesSociales = Social::all();
        return view('home', compact("cookies", 'grupos', 'redesSociales'));
    }


    public  function ccookie($req)
    {
        $cookie_de_aceptacion = !$req->cookie('__CAC') ? true : false;
        $cookie_de_contenido_adulto = !$req->cookie('__CAD') ? true : false;
        return ["__CAC" => $cookie_de_aceptacion, "__CAD" => $cookie_de_contenido_adulto];
    }
}
