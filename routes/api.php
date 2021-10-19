<?php

use App\Models\Set;
use App\Http\Resources\SetResource;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
|   Sets' routes 
|--------------------------------------------------------------------------
*/

//get all the sets 
Route::get("/sets", function(){
    $set = Set::all();
    return SetResource::collection($set);
});

//add a new set
Route::post("/sets", function(Request $request){

    return Set::create([
        'scry_id'  => $request->scry_id,
        'code'  => $request->code,
        'name'  => $request->name,
        'release_date'  => $request->release_date,
        'icon_svg_uri'  => $request->icon_svg_uri,
    ]);
});

//delete set
Route::delete("/sets/{id}", function($id){

    //with DB facade
    //DB::table('sets')->where('id', $id)->delete();

    $set = Set::find(1)->where('id',$id);
    $set->delete();

    return 204;
});
