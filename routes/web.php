<?php

// Route::get('/', function () {
//   return view('index');
// });
Auth::routes();

Route::get('clear', function() {
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'sukses';
});

Route::get('register', function() {
    return redirect('/login');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index');
Route::post('/contact_us', 'EmailController@store');
Route::get('/blog/{url?}', 'IndexController@show');
Route::get('blogs','IndexController@blog');

Route::middleware('admin')->group(function () {
    // dashboard
    Route::get('panel/dashboard','DashboardController@index')->name('dashboard');
    // config
    Route::get('panel/config','ConfigController@index')->name('config');
    Route::post('panel/config','ConfigController@update');
    // Users
    Route::get('panel/users','UserController@create')->name('users');
    Route::post('panel/users','UserController@store');
    Route::get('panel/users/edit/{id}','UserController@edit');
    Route::post('panel/users/edit/{id}','UserController@update');
    Route::delete('panel/users/delete/{id}','UserController@destroy');
    // Account
    Route::get('panel/account','UserController@editAcc')->name('account');
    Route::get('panel/account/edit/{id}','UserController@super_e');
    Route::post('panel/account/edit/{id}','UserController@super_u');
});

Route::middleware('auth')->group(function () {
    // blogs
    Route::get('panel/blog','BlogController@create')->name('blog');
    Route::post('panel/blog','BlogController@store');
    Route::get('panel/blog/edit/{id}','BlogController@edit');
    Route::post('panel/blog/edit/{id}','BlogController@update');
    Route::delete('panel/blog/delete/{id}','BlogController@destroy');
    // Email
    Route::get('panel/email','EmailController@index')->name('email');    
    Route::delete('panel/email/delete/{id}','EmailController@destroy');    
    // Service
    // Route::get('panel/routes', 'HomeController@admin');
    Route::get('panel/service','ServiceController@create')->name('service');
    Route::post('panel/service','ServiceController@store');
    Route::get('panel/service/edit/{id}','ServiceController@edit');
    Route::post('panel/service/edit/{id}','ServiceController@update');
    Route::delete('panel/service/delete/{id}','ServiceController@destroy');
    //portfolio
    Route::get('panel/portfolio','PortfolioController@create')->name('portfolio');
    Route::post('panel/portfolio','PortfolioController@store');
    Route::get('panel/portfolio/edit/{id}','PortfolioController@edit');
    Route::post('panel/portfolio/edit/{id}','PortfolioController@update');
    Route::delete('panel/portfolio/delete/{id}','PortfolioController@destroy');
    // Category Blog
    Route::get('panel/category','CategoryController@create')->name('category');
    Route::post('panel/category','CategoryController@store');
    Route::post('panel/category/update/{id}','CategoryController@update');
    Route::delete('panel/category/delete/{id}','CategoryController@destroy');
    // testimonial
    Route::get('panel/testimonial','TestiController@create')->name('testi');
    Route::post('panel/testimonial','TestiController@store');
    Route::get('panel/testimonial/edit/{id}','TestiController@edit');
    Route::post('panel/testimonial/edit/{id}','TestiController@update');
    Route::delete('panel/testimonial/delete/{id}','TestiController@destroy');
});

// Route::middleware('admin')->group(function () {
//     // Service
//     Route::get('panel/routes', 'HomeController@admin');
//     Route::get('panel/service','ServiceController@create')->name('service');
//     Route::post('panel/service','ServiceController@store');
//     Route::get('panel/service/edit/{id}','ServiceController@edit');
//     Route::post('panel/service/edit/{id}','ServiceController@update');
//     Route::delete('panel/service/delete/{id}','ServiceController@destroy');
//     //portfolio
//     Route::get('panel/portfolio','PortfolioController@create')->name('portfolio');
//     Route::post('panel/portfolio','PortfolioController@store');
//     Route::get('panel/portfolio/edit/{id}','PortfolioController@edit');
//     Route::post('panel/portfolio/edit/{id}','PortfolioController@update');
//     Route::delete('panel/portfolio/delete/{id}','PortfolioController@destroy');
//     // blogs
//     Route::get('panel/blog','BlogController@create')->name('blog');
//     Route::post('panel/blog','BlogController@store');
//     Route::get('panel/blog/edit/{id}','BlogController@edit');
//     Route::post('panel/blog/edit/{id}','BlogController@update');
//     Route::delete('panel/blog/delete/{id}','BlogController@destroy');

//     // config
//     Route::get('panel/config','ConfigController@index')->name('config');
//     Route::get('panel/config/edit/{id}','ConfigController@edit');
//     Route::post('panel/config/edit/{id}','ConfigController@update');
//     // Users
//     Route::get('panel/users','UserController@create')->name('users');
//     Route::post('panel/users','UserController@store');
//     Route::get('panel/users/edit/{id}','UserController@edit');
//     Route::post('panel/users/edit/{id}','UserController@update');
//     Route::delete('panel/users/delete/{id}','UserController@destroy');
// });
