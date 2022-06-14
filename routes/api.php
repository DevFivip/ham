<?php

use App\Http\Controllers\GroupController;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/save', function (Request $request) {

    $g = new GroupController();
    // try {

        // $request->validate([
        //     "name" => 'required|max:50',
        //     "url" => 'required|unique:groups|max:255|url',
        //     "group_type_id" => 'required',
        //     "social_id" => 'required',
        //     "categoria_id" => 'required',
        //     "subcategoria_id" => 'required|exists:subcategories,id',
        // ]);

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
    
    
            $data["slug"] = $g->slugfy($data['name'] . "-" . Str::random(3));
            $data["description"] = $data["content"];
    
    
            // dd($datesum);
    
            $data["fecha_corte"] = null;
    
            $g = Group::create($data);

            return $g;

});