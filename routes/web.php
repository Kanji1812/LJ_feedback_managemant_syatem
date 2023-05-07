<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c6;
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
//     return view('dashbord');
// });

Route::view('/','dashbord');


// Route::view('form','form');
// Route::post('form',[c1::class,'insert']);

//Route::view('reg','reg');

Route::view('log','log');
Route::post('log',function(){
    if(session()->has('user'))
    {
        return redirect('test');
    }
    return view('log');
});

Route::get('Logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('log');
});

// Route::view('product','product');

Route::post('log',[c6::class,'insert']);
// This is a Registration of All Home page ,Delete-page and Update Page or Edit-page.
Route::view('test','test');

Route::view('delete','delete');
Route::view('edit','edit');

// This is a use for Delete Data In Admin Panel.
Route::get('test',[c6::class,'dispData']);
Route::get('delete',[c6::class,'dispDataInDel']);
Route::get('delete/{id}',[c6::class,'del']);

// This is a For Edit Data In Admin Panal.
Route::get('edit',[c6::class,'dispDataInEdit']);
Route::get('edit/{id}',[c6::class,'fd']);
Route::post('edit/editdata',[c6::class,'update1']);

// Route::view('editdata','editdata');

// Route::get('test',[c6::class,'search']);

Route::view('fb','fb');
Route::view('about','about');
Route::view('log1','log1');
Route::post('log1',[c6::class,'check']);

Route::view('faculty','faculty');

Route::view('feedback1','feedback.feedback1');
Route::view('feedback2','feedback.feedback2');
Route::view('feedback3','feedback.feedback3');
Route::view('feedback4','feedback.feedback4');
Route::view('lastfeedback','feedback.lastfeedback');
Route::view('thankyou','feedback.thankyou');
// This is a first Faculty feedback Rugistration.

// // This is a First Page.

Route::post('feedback1',[c6::class,'feedback']);

// // This is a Second Page.

Route::post('feedback2',[c6::class,'feedback']);

// // // This is a Threade Page.

Route::post('feedback3',[c6::class,'feedback']);


// // // This is a Fourth Page.

Route::post('feedback4',[c6::class,'feedback']);

// // // This is a Last Page.

Route::post('lastfeedback',[c6::class,'feedback']);


// This is a First faculty Admin Entry.

Route::get('faculty1',[c6::class,'faculty12']);
Route::get('faculty2',[c6::class,'feed2']);
Route::get('faculty3',[c6::class,'feed3']);
Route::get('faculty4',[c6::class,'feed4']);
Route::get('faculty5',[c6::class,'feed5']);
Route::get('search',[c6::class,'search']);

// This is a add-admin in admin templet.
Route::view('addadmin','addadmin');
Route::post('addadmin',[c6::class,'addadmin12']);


// This is a Data of all Admin in Data-Base.
Route::get('alladmin',[c6::class,'dispadmin']);



// This is all faculty file. Link.
Route::view("allfaculty",'allfaculty');


Route::view('profile1','profile.faculty1_profile');
Route::view('profile2','profile.faculty2_profile');
Route::view('profile3','profile.faculty3_profile');
Route::view('profile4','profile.faculty4_profile');
Route::view('profile5','profile.faculty5_profile');