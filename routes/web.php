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
Route::post('/language-chooser', 'LanguageController@changeLanguage');
Route::post('/language/', array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LanguageController@changeLanguage'
));
Route::get('send_test_email', function(){
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
    {
        $message->subject('Hello');
        $message->from('mailgun@mg.via-vn.com');
        $message->to('hoangnghiem205@gmail.com');
    });
    echo 'done';
});
Route::get('/', 'HomeController@index')->name('user.home');
Route::get('/about', 'HomeController@about')->name('user.about');
Route::get('/service', 'HomeController@service')->name('user.service');
Route::get('/feature', 'HomeController@feature')->name('user.feature');
Route::get('/news', 'HomeController@news')->name('user.news');
Route::get('/news/{id}', 'HomeController@detail')->name('user.news.detail');
Route::get('/contact', 'HomeController@contact')->name('user.contact');
Route::get('/recruitment', 'HomeController@recruitment')->name('user.recruitment');
Route::post('/contact', 'HomeController@sendMail')->name('user.contact.send');
Auth::routes();

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
    // recruit
    Route::get('/recruit', 'RecruitmentsController@index')->name('admin.recruit');
    Route::get('/recruit/new', 'RecruitmentsController@showAddForm')->name('admin.recruit.form');
    Route::get('/recruit/edit/{id}', 'RecruitmentsController@showEditForm')->name('admin.recruit.editform');
    Route::get('/recruit/delete/{id}', 'RecruitmentsController@delete')->name('admin.recruit.delete');
    Route::patch('/recruit/udpate/{id}', 'RecruitmentsController@update')->name('admin.recruit.update');
    Route::post('/recruit/new', 'RecruitmentsController@add')->name('admin.recruit.new');
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
    // others
    Route::get('/other', 'OtherController@index')->name('admin.other');
    Route::get('/other/new', 'OtherController@showAddForm')->name('admin.other.form');
    Route::get('/other/edit/{id}', 'OtherController@showEditForm')->name('admin.other.editform');
    Route::get('/other/delete/{id}', 'OtherController@delete')->name('admin.other.delete');
    Route::patch('/other/udpate/{id}', 'OtherController@update')->name('admin.other.update');
    Route::post('/other/new', 'OtherController@add')->name('admin.other.new');
});


