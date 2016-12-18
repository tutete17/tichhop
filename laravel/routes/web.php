<?php

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
session_start();
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home',function(){
    return View::make("home");
});
Route::get('/login',function(){
    return View::make("home");
});
Route::post("/login",function(){

    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
        //$email = session('email');
        //$pass = session('password');

        return View::make("home")  ;
    }else{
        return View::make("login");

    }


});
Route::post("/submit_login",function(Request $request){
    $email = $request::input("email");
    $pass =  ($request::input("password"));
    $check = DB::connection('mysql')->select('select count(*)from users where email =? and password = ? ',[$email,$pass]);
    if( $check){
        $_SESSION["email"] = $email;
        $_SESSION["password"] =$pass;

      //  $_SESSION['admin_login']=1;
         return View::make("home") ;
    }else{
        return "Login false";
    }
});
Route::post('/logout',function(){
    session_destroy();
    session_start();
//    session()->forget('email');
//    session()->forget('password');
   // session()->flush();
    return View::make("home");
   // return View::make('module');

});

