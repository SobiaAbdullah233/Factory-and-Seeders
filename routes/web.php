<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('firstProject');
// });
// // });
Route::get('/', function () {
    return view('array');
});
// Route::view('Contact','contact',['name'=>'Sobia Abdullah','RollNo'=>'233']);

// // Route::get('Posts/{post_id}/Comments/{comment_id}', function ($id,$com) {
// //     return view('mypost',['postid'=>$id,'commentid'=>$com])->where(['post_id'=>'[A-Za-z]+','comment_id'=>'[0-9]+']);
// // });

// Route::get('Posts/{post_id}/Comments/{comment_id}', function ($id,$com) {
//     return view('mypost',['postid'=>$id,'commentid'=>$com]);
// });

Route::get('about',[aboutControllers::class,'show']);
