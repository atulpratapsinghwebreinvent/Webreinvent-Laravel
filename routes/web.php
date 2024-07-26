<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    $arrayCode = ['This','is the','Atul Code'];
    return view('welcome',compact('arrayCode'));
});
Route::get('/about',[Controller::class,'index']);

Route::get('/get-session',function ()
{
    $session = Session::all();

    echo "<pre>";
    print_r ($session);

});

Route::get('/set-session', function (Request $request)
{
    $request->session()->put('name', 'Atul');
    return redirect('/get-session');
});
