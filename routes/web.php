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
use App\Person;
use App\Course;
use App\comment;
use App\JoinCourse;
use App\BlogPost;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/index', function() {
    return view('index');
});
Route::group(['prefix'=>'admin'],function() {
    Route::group(['prefix' => 'person'], function () {
        Route::get('list', 'PersonController@getList');
        Route::get('fix/{idPerson}', 'PersonController@getFix');
        Route::post('fix/{idPerson}', 'PersonController@postFix')
        Route::get('add', 'PersonController@getAdd');
        Route::post('add', 'PersonController@postAdd');
        Route::get('delete/{idPerson}', 'PersonController@getDelete');
    });
    Route::group(['prefix' => 'course'], function () {
        Route::get('list', 'CourseController@getList');
        Route::get('fix/{idCourse}', 'CourseController@getFix');
        Route::post('fix/{idCourse}', 'CourseController@postFix');
        Route::get('add', 'CourseController@getAdd');
        Route::post('add', 'CourseController@postAdd');
        Route::get('delete/{idCourse}', 'CourseController@getDelete');
    });
    Route::group(['prefix' => 'lesson'], function () {
        Route::get('list', 'LessonController@getList');
        Route::get('fix/{id}', 'LessonController@getFix');
        Route::post('fix/{id}', 'LessonController@postFix');
        Route::get('add', 'LessonController@getAdd');
        Route::post('add', 'LessonController@postAdd');
        Route::get('delete/{stt}', 'LessonController@getDelete');
    });
    Route::group(['prefix' => 'permission'], function () {
        Route::get('list', 'PermissionController@getList');
        Route::get('fix/{idperson}', 'PermissionController@getFix');
        Route::post('fix/{idperson}', 'PermissionController@postFix');
    });
});

Route::get('index', 'MainController@index');
Route::get('/', 'MainController@index');

Route::get('about', 'MainController@about');

Auth::routes();
Route::get('signup', 'PersonController@getSignup');
Route::post('signup', 'PersonController@postSignup');
Route::get('profile','HomeController@index');
Route::post('profile','HomeController@index')->name('profile');
Route::get('tutorial','HomeController@tutorial')->name('tutorial');
Route::get('fix/{idPerson}','HomeController@fix');
Route::post('fix/{idPerson}','HomeController@postFix');
Route::get('test', function(){
   $user = JoinCourse::find(2);
   $lesson = $user->takeLike;
   echo $user;
});

Route::get('test1', function() {
   $course = BlogPost::find(1);
   $person = $course->takeLike;
   echo count($person);
});
