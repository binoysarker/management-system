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
Route::get('/ms', 'PagesController@getIndex');
Route::get('/ms/student-profile', 'ApplicationController@index');
Route::get('/ms/apply-now', 'ApplicationController@create');
Route::post('/ms/apply-now', 'ApplicationController@store');
Route::get('/ms/admission-result', 'PagesController@getAdmissionResult');
Route::get('/ms/exam-routine', 'PagesController@getClassRoutine');
Route::get('/ms/co-curriculer', 'PagesController@getCoCurriculer');
Route::get('/ms/academic-calander', 'PagesController@getAcademicCalander');
Route::get('/ms/gallery', 'PagesController@getGallery');
Route::get('/ms/scholarship', 'PagesController@getScholarship');
Route::get('/ms/events-archive', 'PagesController@getEventsArchive');
Route::get('/ms/events-single', 'PagesController@getEventsSingle');
Route::get('/ms/course-archive', 'PagesController@getCourseArchive');
Route::get('/ms/course-single', 'PagesController@getCourseSingle');
Route::get('/ms/blog-archive', 'PagesController@getBlogArchive');
Route::get('/ms/blog-single', 'PagesController@getBlogSingle');

Route::get('/ms/contact', 'PagesController@getContact');
Route::get('/ms/404', 'PagesController@get404');


Route::post('/ms/fileupload', 'PagesController@storefile');
Route::get('/ms/fileupload', 'PagesController@getfile');
