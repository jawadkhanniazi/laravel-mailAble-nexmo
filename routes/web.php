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


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('mail.signup');
});
Route::get('test-email', 'MailController@sendEmail')->name('test-email');

Route::get('/sms', function () {
    return view('sms');
});

Route::post('/sms', 'SmsController@sendSms');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
||  not required    ||


Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/send-mail', function () {
    $details = [
        'title '=>'mail from surfside media',
        'body'=>  'testing email'
    ];
    \Mail::to('jawadkhan31849@gmail.com')->send(new \App\Mail\TestMail($details));
    echo 'mail has been sent';
});
*/
//Route::get('/about', 'pagesController@getIndex');