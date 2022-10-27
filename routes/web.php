<?php

use App\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Auth::routes(['register' => false]);

Route::get('/', 'PagesController@home')->name('index');
Route::get('/empresa', 'PagesController@empresa')->name('empresa');
Route::get('secciones', 'PagesController@secciones')->name('secciones');
Route::get('familias', 'PagesController@familias')->name('familias');
Route::get('familia/{id}', 'PagesController@familia')->name('familia');
Route::get('marcas', 'PagesController@marcas')->name('marcas');
Route::get('marca/{id}', 'PagesController@marca')->name('marca');
Route::get('aplicaciones', 'PagesController@aplicaciones')->name('aplicaciones');
Route::get('aplicacion/{id}', 'PagesController@aplicacion')->name('aplicacion');
Route::get('/productos', 'PagesController@productos')->name('productos');
Route::get('/producto/{id}', 'PagesController@producto')->name('producto');
Route::get('/servicios', 'PagesController@servicios')->name('servicios');
Route::get('/videos', 'PagesController@videos')->name('videos');
Route::get('/clientes', 'PagesController@clientes')->name('clientes');
Route::get('/solicitud-de-presupuesto', 'PagesController@solicitudDePresupuesto')->name('solicitud-de-presupuesto');
Route::get('/contacto', 'PagesController@contacto')->name('contacto');

Route::post('enviar-cotizacion', 'MailController@quote')->name('send-quote');
Route::post('enviar-contacto', 'MailController@contact')->name('send-contact');
Route::post('newsletter', 'NewsLetterController@storeNewsletter')->name('newsletter.store');

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');

Route::get('/ficha-tecnica/{id}', 'PagesController@fichaTecnica')->name('ficha-tecnica');
Route::delete('/ficha-tecnica/{id}', 'PagesController@borrarFichaTecnica')->name('borrar-ficha-tecnica');

Route::middleware('auth')->prefix('admin')->group(function () {
    /** Page Home */
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('home/content', 'HomeController@content')->name('home.content');
    Route::post('home/content/generic-section/store', 'HomeController@store')->name('home.content.store');
    Route::post('home/content/generic-section/update', 'HomeController@update')->name('home.content.update');
    Route::delete('home/content/{id}', 'HomeController@destroy')->name('home.content.destroy');
    Route::get('home/content/slider/get-list', 'HomeController@sliderGetList')->name('home.slider.get-list');
    /** Fin home*/
    /** Page Company */
    Route::get('company/content', 'CompanyController@content')->name('company.content');
    Route::post('company/content/store-slider', 'CompanyController@storeSlider')->name('company.content.storeSlider');
    Route::post('company/content/update-slider', 'CompanyController@updateSlider')->name('company.content.updateSlider');
    Route::post('company/content/update-info', 'CompanyController@updateInfo')->name('company.content.updateInfo');
    Route::post('company/content/generic-section/update', 'CompanyController@updateHomeGenericSection')->name('company.content.generic-section.update');
    Route::delete('company/content/{id}', 'CompanyController@destroySlider')->name('company.content.destroy');
    Route::get('company/content/slider/get-list', 'CompanyController@sliderGetList')->name('company.slider.get-list');
    /** Fin company*/
    /** Page Category */
    Route::get('category/content', 'CategoryController@content')->name('category.content');
    Route::post('category/content/store', 'CategoryController@store')->name('category.content.store');
    Route::post('category/content', 'CategoryController@update')->name('category.content.update');
    Route::get('category/content/find/{id?}', 'CategoryController@find')->name('category.content.find');
    Route::delete('category/content/{id}', 'CategoryController@destroy')->name('category.content.destroy');
    Route::get('category/content/get-list', 'CategoryController@getList');
    /** Fin category*/
    /** Page Application */
    Route::get('application/content', 'ApplicationController@content')->name('application.content');
    Route::post('application/content/store', 'ApplicationController@store')->name('application.content.store');
    Route::post('application/content', 'ApplicationController@update')->name('application.content.update');
    Route::delete('application/content/{id}', 'ApplicationController@destroy')->name('application.content.destroy');
    Route::get('application/content/get-list', 'ApplicationController@getList')->name('application.content.get-list');
    Route::get('application/content/find/{id?}', 'ApplicationController@find')->name('application.content.find');
    /** Fin Application*/
    /** Page  Brand*/
    Route::get('brand/content', 'BrandController@content')->name('brand.content');
    Route::post('brand/content/store', 'BrandController@store')->name('brand.content.store');
    Route::post('brand/content', 'BrandController@update')->name('brand.content.update');
    Route::delete('brand/content/{id}', 'BrandController@destroy')->name('brand.content.destroy');
    Route::get('brand/content/get-list', 'BrandController@getList')->name('brand.content.get-list');
    Route::get('brand/content/find/{id?}', 'BrandController@find')->name('brand.content.find');
    /** Page  Brand */
    /** Page  Video*/
    Route::get('video/content', 'VideoController@content')->name('video.content');
    Route::post('video/content/store', 'VideoController@store')->name('video.content.store');
    Route::post('video/content', 'VideoController@update')->name('video.content.update');
    Route::delete('video/content/{id}', 'VideoController@destroy')->name('video.content.destroy');
    Route::get('video/content/get-list', 'VideoController@getList')->name('video.content.get-list');
    Route::get('video/content/find/{id?}', 'VideoController@find')->name('video.content.find');
    /** Page  Video */
    /** Page Represented */
    Route::get('represented/content', 'RepresentedController@content')->name('represented.content');
    Route::post('represented/content/store', 'RepresentedController@store')->name('represented.content.store');
    Route::post('represented/content', 'RepresentedController@update')->name('represented.content.update');
    Route::delete('represented/content/{id}', 'RepresentedController@destroy')->name('represented.content.destroy');
    Route::get('represented/content/get-list', 'RepresentedController@getList')->name('represented.content.get-list');
    Route::get('represented/content/find/{id?}', 'RepresentedController@find')->name('represented.content.find');
    /** Fin Represented*/
    /** Page Client */
    Route::get('client/content', 'ClientController@content')->name('client.content');
    Route::post('client/content/store', 'ClientController@store')->name('client.content.store');
    Route::post('client/content', 'ClientController@update')->name('client.content.update');
    Route::delete('client/content/{id}', 'ClientController@destroy')->name('client.content.destroy');
    Route::get('client/content/get-list', 'ClientController@getList')->name('client.content.get-list');
    Route::get('client/content/find/{id?}', 'ClientController@find')->name('client.content.find');
    /** Fin Client*/
    /** Page Product */
    Route::get('product/content', 'ProductController@content')->name('product.content');
    Route::get('product/content/create', 'ProductController@create')->name('product.content.create');
    Route::post('product/content/store', 'ProductController@store')->name('product.content.store');
    Route::get('product/content/{id}/edit', 'ProductController@edit')->name('product.content.edit');
    Route::put('product/content', 'ProductController@update')->name('product.content.update');
    Route::delete('product/content/{id}', 'ProductController@destroy')->name('product.content.destroy');
    Route::get('product/content/get-list', 'ProductController@getList')->name('product.content.get-list');
    Route::get('product/content/find-product/{id?}', 'ProductController@find')->name('product.content.find');
    /** Fin product*/
    /** Page Product Picture */
    Route::delete('product-picture/content/destroy/{id}', 'ProductPictureController@destroy')->name('product-picture.content.destroy');
    /** Fin product picture*/
    /** Page Service */
    Route::get('service/content', 'ServiceController@content')->name('service.content');
    Route::get('service/content/find/{id?}', 'ServiceController@find')->name('service.content.find');
    Route::get('service/content/get-list', 'ServiceController@getList')->name('service.content.get-list');
    Route::post('service/content', 'ServiceController@update')->name('service.content.update');
    Route::post('service/content/store', 'ServiceController@store')->name('service.content.store');
    Route::delete('service/content/{id}', 'ServiceController@destroy')->name('service.content.destroy');
    /** Fin Service*/
    /** Page company */
    Route::get('data/content', 'DataController@content')->name('data.content');
    Route::put('data/content', 'DataController@update')->name('data.content.update');
    /** Fin company*/
    /** Page newsletter */
    Route::get('newsletter/content', 'NewsLetterController@content')->name('newsletter.content');
    Route::get('newsletter/content/get-list', 'NewsLetterController@getList')->name('newsletter.content.get-list');
    Route::delete('newsletter/content/{id}', 'NewsLetterController@destroy')->name('newsletter.content.destroy');
    /** Fin newsletter*/
    /** Page newsletter */
    Route::get('page/content', 'AdminPageController@content')->name('page.content');
    Route::put('page/content', 'AdminPageController@update')->name('page.content.update');
    /** Fin newsletter*/

    Route::get('content/', 'ContentController@content')->name('content');
    Route::get('content/{id}', 'ContentController@findContent');
    Route::post('content/hero-update', 'ContentController@heroUpdate')->name('content.hero-update');
    Route::delete('content/image/{id}/{reg}', 'ContentController@destroyImage')->name('content.destroy-image');

    Route::get('user/get-list', 'UserController@getList')->name('user.get-list');
    Route::resource('user', 'UserController');
});
