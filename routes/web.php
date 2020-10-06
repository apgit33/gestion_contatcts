<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PostsController;
use App\Models\Contacts;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {

    return view('gestion_contacts',[
        'contact'=>'Jack',
    ]);
});

// Route::get('/posts/{post}', function ($test) {
//     $array = [
//         '1' => 'non',
//         '2' =>'oui'
//     ];
//     if (!array_key_exists($test,$array)) {
//        abort('404','soory');
//     }
//     return view('test', [
//         'name' => $array[$test]
//     ]);
// });

// Route::get('/contact/{contact}','ContactsController@show');
Route::get('contacts/{contact}',[ContactsController ::class,'show']);
// Route::get('/posts/{post}','PostsController@show');
Route::get('posts/{post}',[PostsController::class,'show']);

