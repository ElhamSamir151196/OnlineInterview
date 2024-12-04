<?php

use Illuminate\Support\Facades\Route;

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


/********************************* User interface ***************************************** */
    Route::get('/', function () {
        return view('UserInterface/HomePage');
    });
    Route::get('/Pretest', function () {
        return view('UserInterface/PreTestPage');
    });

   /* Route::get('/test', function () {
        return view('UserInterface/TestPage');
    });*/

    Route::get('/test/{id}','TestController@index')->name('Test.index');

    Route::get('/Profile','UserController@Profile');


    Route::post('/submit_answer','TestController@store');
   // Route::post('/submit_answer','TestController@store');

/**********************************Dash board  **********************************************/


        Route::get('/dashboard', function () {
            return view('Dashboard/DashboardHome');
        });

        /**********************************question *********************************************** */
        Route::get('/CreateQuestion', function () {
            return view('Dashboard/Question/CreateQuestion');
        });

        Route::post('/create_Question','QuestionController@store');

        Route::get('/show_Questions', 'QuestionController@index');
        Route::delete('/question/{id}','QuestionController@destroy');

        Route::get('/edit_question/{id}', 'QuestionController@edit')->name('question.edit');
        Route::get('/show_question/{id}', 'QuestionController@show')->name('question.show');
        Route::put('/question/{id}', 'QuestionController@update')->name('question.update');
        Route::get('/show_question_category/{id}', 'QuestionController@show_category')->name('question.show_category');



        /***********************************Users ************************************* **********/

        Route::post('/create_user','UserController@store');

        Route::get('/create_user_by_Admin', function () {
            return view('Dashboard/User/Create');
        });

        Route::get('/show_all_user','UserController@index');
        
        Route::get('/show_user/{id}', 'UserController@show')->name('user.show');
        Route::get('/edit_user/{id}', 'UserController@edit')->name('user.edit');
        Route::put('/update_user/{id}', 'UserController@update')->name('user.update');

        
        Route::get('/edit_user_password/{id}', 'UserController@edit_password')->name('user.edit_password');
        Route::put('/update_user_password/{id}', 'UserController@update_password')->name('user.update_password');
        Route::delete('/user/{id}','UserController@destroy');





        

        



/**************************************user Authanticaion  *********************************/
        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');
