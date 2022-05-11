<?php

namespace App\Http\Controllers;

use App\Models\Group;
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
    public function index()
    {
        $grupos = Group::where('user_id', auth()->id())->with('social', 'categoria', 'subcategoria', 'location', 'type')->orderBy('id', 'ASC')->get();
        return view('home', compact('grupos'));
    }
}
