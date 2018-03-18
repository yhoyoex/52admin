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

/*================================ BLOG ================================*/
Route::get('/', function () {
    return view('blog/index');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
	Route::get('home', ['as'=>'home','uses'=>'HomeController@index']);
	Route::get('logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);

	/*================================ ADMIN ================================*/
	// Dashboard
	Route::get('admin', ['as'=>'admin','uses'=>'AdminController@index']);
	Route::get('dashboard', ['as'=>'dashboard','uses'=>'DashboardController@index']);
	Route::get('dashboard2', ['as'=>'dashboard2','uses'=>'DashboardController@index2']);
	// Email
	Route::get('inbox', ['as'=>'inbox','uses'=>'EmailController@inbox']);
	Route::get('compose', ['as'=>'compose','uses'=>'EmailController@compose']);
	Route::get('detail', ['as'=>'detail','uses'=>'EmailController@detail']);
	// Editor
	Route::get('editor',['as'=>'editor','uses'=>'CodeEditorController@index']);
	Route::post('editor_get_dir',['as'=>'editor_get_dir','uses'=>'CodeEditorController@get_dir']);
	Route::post('editor_get_file',['as'=>'editor_get_file','uses'=>'CodeEditorController@get_file']);
	Route::post('editor_save_file',['as'=>'editor_save_file','uses'=>'CodeEditorController@save_file']);
	// Modul
	Route::resource('modules','ModuleController');
	Route::resource('module_fields','FieldController');
	Route::get('module_generate_crud',['as'=>'module_generate_crud','uses'=>'ModuleController@generate_crud']);
	Route::get('module_generate_migr/{model_id}',['as'=>'module_generate_migr/{model_id}','uses'=>'ModuleController@generate_migr']);
	Route::get('module_generate_update/{model_id}',['as'=>'module_generate_update/{model_id}','uses'=>'ModuleController@generate_update']);
	Route::get('module_generate_migr_crud/{model_id}',['as'=>'module_generate_migr_crud/{model_id}','uses'=>'ModuleController@generate_migr_crud']);
	Route::get('modules/{model_id}/set_view_col/{column_name}',['as'=>'modules/{model_id}/set_view_col/{column_name}','uses'=>'ModuleController@set_view_col']);
	Route::post('save_role_module_permissions/{id}',['as'=>'save_role_module_permissions/{id}','uses'=>'ModuleController@save_role_module_permissions']);
	Route::get('save_module_field_sort/{model_id}',['as'=>'save_module_field_sort/{model_id}','uses'=>'ModuleController@save_module_field_sort']);
	Route::post('check_unique_val/{field_id}',['as'=>'check_unique_val/{field_id}','uses'=>'FieldController@check_unique_val']);
	Route::get('module_fields/{id}/delete',['as'=>'module_fields/{id}/delete','uses'=>'FieldController@destroy']);
	Route::post('/get_module_files/{module_id}',['as'=>'/get_module_files/{module_id}','uses'=>'ModuleController@get_module_files']);

	/*================================ FORUM ================================*/
	Route::get('forum', function () {
	    return view('forum/index');
	});
});
