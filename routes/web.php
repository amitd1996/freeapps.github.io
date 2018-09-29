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

// Route::get('admincreate', ['middleware' => 'Admin', function () { return 'This is for ADMINS only'; }]);

// Universal

    Route::get('/','PostController@posthomes');

    Route::get('homes','PostController@posthomes');

    Route::get('browser','PostController@browser');

    Auth::routes();

// Check User Has Admin Or Not

// Route::group(['middleware' => ['auth', 'admin']], function() {

    // Admin 

    Route::get('dashboard','AdminController@dashboard')->middleware('admin');

    Route::get('admincreate','AdminController@admincreate')->middleware('admin');

    // Route::post('admincreate','AdminController@admin.create')->middleware('admin');

    Route::post('admininsert','AdminController@admininsert')->middleware('admin');
    
    Route::get('adminview','AdminController@adminview')->middleware('admin');
    
    Route::get('post/{id}','AdminController@adminpost')->middleware('admin');
    
    Route::get('adminedit/{id}','AdminController@adminedit')->middleware('admin');
    
    Route::get('adminupdate/{id}','AdminController@adminupdate')->middleware('admin');
    
    Route::get('admindelete/{id}','AdminController@admindelete')->middleware('admin');

    // Post

    Route::get('create','PostController@create')->middleware('admin');

    Route::post('postinsert','PostController@postinsert')->middleware('admin');

    Route::get('postview','PostController@postview')->middleware('admin');

    Route::get('postread/{id}','PostController@postread')->middleware('admin');

    Route::get('posts/{id}','PostController@posts');

    Route::get('postedit/{id}','PostController@postedit')->middleware('admin');

    Route::get('postupdate/{id}','PostController@postupdate')->middleware('admin');

    Route::get('postdelete/{id}','PostController@postdelete')->middleware('admin');

// });