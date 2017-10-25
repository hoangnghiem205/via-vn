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

Route::get('/', function () {
    return view('welcome');
});

// route to show the login form

// route to process the form
Route::post('admin/login', array('uses' => 'HomeController@doLogin'));

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // users
    Route::get('/users', 'UsersController@index')->name('admin.users');
    Route::get('/users/new', 'UsersController@showUserForm')->name('admin.users.form');
    Route::get('/users/edit/{id}', 'UsersController@showEditUserForm')->name('admin.users.editform');
    Route::patch('/users/udpate/{id}', 'UsersController@updateUser')->name('admin.users.update');
    Route::post('/users/new', 'UsersController@userRegist')->name('admin.users.new');
    Route::get('/users/delete/{id}', 'UsersController@deleteUser')->name('admin.users.delete');
    // posts
    Route::get('/posts', 'PostsController@index')->name('admin.posts');
    Route::get('/posts/new', 'PostsController@showAddForm')->name('admin.posts.form');
    Route::get('/posts/edit/{id}', 'PostsController@showEditForm')->name('admin.posts.editform');
    Route::get('/posts/delete/{id}', 'PostsController@delete')->name('admin.posts.delete');
    Route::patch('/posts/udpate/{id}', 'PostsController@update')->name('admin.posts.update');
    Route::post('/posts/new', 'PostsController@add')->name('admin.posts.new');
    // services
    Route::get('/services', 'ServicesController@index')->name('admin.services');
    Route::get('/services/new', 'ServicesController@showAddForm')->name('admin.services.form');
    Route::get('/services/edit/{id}', 'ServicesController@showEditForm')->name('admin.services.editform');
    Route::get('/services/delete/{id}', 'ServicesController@delete')->name('admin.services.delete');
    Route::patch('/services/udpate/{id}', 'ServicesController@update')->name('admin.services.update');
    Route::post('/services/new', 'ServicesController@add')->name('admin.services.new');
    // features
    Route::get('/features', 'FeaturesController@index')->name('admin.features');
    Route::get('/features/new', 'FeaturesController@showAddForm')->name('admin.features.form');
    Route::get('/features/edit/{id}', 'FeaturesController@showEditForm')->name('admin.features.editform');
    Route::get('/features/delete/{id}', 'FeaturesController@delete')->name('admin.features.delete');
    Route::patch('/features/udpate/{id}', 'FeaturesController@update')->name('admin.features.update');
    Route::post('/features/new', 'FeaturesController@add')->name('admin.features.new');
    // company info
    Route::get('/info', 'InfoController@index')->name('admin.info');
    Route::get('/info/new', 'InfoController@showAddForm')->name('admin.info.form');
    Route::get('/info/edit/{id}', 'InfoController@showEditForm')->name('admin.info.editform');
    Route::get('/info/delete/{id}', 'InfoController@delete')->name('admin.info.delete');
    Route::patch('/info/udpate/{id}', 'InfoController@update')->name('admin.info.update');
    Route::post('/info/new', 'InfoController@add')->name('admin.info.new');
    // slide
    Route::get('/slides', 'SlidesController@index')->name('admin.slides');
    Route::get('/slides/new', 'SlidesController@showAddForm')->name('admin.slides.form');
    Route::get('/slides/edit/{id}', 'SlidesController@showEditForm')->name('admin.slides.editform');
    Route::get('/slides/delete/{id}', 'SlidesController@delete')->name('admin.slides.delete');
    Route::patch('/slides/udpate/{id}', 'SlidesController@update')->name('admin.slides.update');
    Route::post('/slides/new', 'SlidesController@add')->name('admin.slides.new');
});


