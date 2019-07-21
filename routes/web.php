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

Route::get('/login', function () {
    return redirect()->route('login');
});


// ---------------------ADMIN ROUTES
Auth::routes();

Route::get ('/home',              'HomeController@index')         ->name('home');
Route::post('/projects-get-data', 'HomeController@get_projects')  ->name('project.getData');
Route::get ('/add-project',       'HomeController@addProject')    ->name('project.add');
Route::post('/insert-project',    'HomeController@insertProject') ->name('project.insert');
Route::get ('/edit-project/{id}', 'HomeController@editProject')   ->name('project.edit');
Route::post('/update-project',    'HomeController@updateProject') ->name('project.update');
Route::post('/delete-project',    'HomeController@deleteProject') ->name('project.delete');

// CategoryController
Route::get ('/categories',       'CategoryController@categorty')        ->name('categories');
Route::post('/category-insert',  'CategoryController@insert_categorty') ->name('category.insert');
Route::post('/category-edit',    'CategoryController@edit_categorty')   ->name('category.edit');
Route::post('/category-update',  'CategoryController@update_categorty') ->name('category.update');
Route::post('/category-delete',  'CategoryController@delete_categorty') ->name('category.delete');

// ---------------------SITE ROUTE ----------------------- //
Route::get ('/',                'SiteController@index')            ->name('index');
Route::get ('/team',            'SiteController@team')             ->name('team');
Route::get ('/contact',         'SiteController@contact')          ->name('contact');
Route::get ('/project/{id}',    'SiteController@project_details')  ->name('project.show.details');
Route::post('/send-msg',        'SiteController@send_msg')         ->name('contact.send');
Route::get ('/company-profile', 'SiteController@companyProfile')   ->name('company.profile');
Route::get ('/projects',        'SiteController@showProjects')     ->name('show.all.projects');

// ServiceController
Route::get ('/web-application',         'ServiceController@web_app')           ->name('web_app');
Route::get ('/erp-systems',             'ServiceController@erp')               ->name('erp');
Route::get ('/e-commerce-solutions',    'ServiceController@e_commerce')        ->name('e_commerce');
Route::get ('/mobile-app-development',  'ServiceController@mobile_app')        ->name('mobile_app');
Route::get ('/digital-marketing',       'ServiceController@digital_marketing') ->name('digital_marketing');
Route::get ('/bulk-sms-marketing',      'ServiceController@sms')               ->name('sms');
Route::get ('/graphics-design',         'ServiceController@graphics')          ->name('graphics');
Route::get ('/hosting-and-domain',      'ServiceController@hosting_domain')    ->name('hosting_domain');