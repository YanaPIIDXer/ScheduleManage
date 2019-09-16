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

Route::get('/', "TopController@index");

Route::get("/login", "UserController@login_page");
Route::post("/user_login", "UserController@login");

Route::get("/register", "UserController@register_page");
Route::post("/user_register", "UserController@register");

Route::get("/member/index", "MemberController@index");

Route::get("/member/add_schedule", "MemberController@add_schedule_page");
Route::post("/member/add_schedule", "MemberController@add_schedule");

Route::get("/member/schedule_list", "MemberController@schedule_list_page");
Route::post("/member/delete_schedule", "MemberController@delete_schedule");

Route::get("/logout", "UserController@logout");
