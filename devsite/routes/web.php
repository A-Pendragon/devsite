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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['uses' => 'PagesController@getIndex'])->name('index');

Route::get('/login', ['uses' => 'AccountController@getLogIn']);

Route::post('/loginpost', ['uses' => 'AccountController@postLogIn'])->name('loginpost');

Route::get('/signup', ['uses' => 'AccountController@setCountries']);

Route::post('/signuppost', ['uses' => 'AccountController@postSignUp'])->name('signuppost');

Route::get('/logout', ['uses' => 'UserController@logOut']);

Route::get('/home', [
	'uses' => 'PostController@getHome',
	'middleware' => 'auth'
])->name('home');

Route::get('/post', [
	'uses' => 'PostController@getSubmit',
	'middleware' => 'auth'
])->name('post');

Route::post('/createpost', [
	'uses' => 'PostController@postCreatePost'
])->name('createpost');

Route::get('/profile', [
	'uses' => 'UserController@profile',
	'middleware' => 'auth'
])->name('profile');

Route::get('/basicinfo', [
	'uses' => 'EditProfileController@basicInfo',
	'middleware' => 'auth'
])->name('basicinfo');

Route::put('/updatebasicinfo', [
	'uses' => 'EditProfileController@updateBasicInfo',
	'middleware' => 'auth'
])->name('updatebasicinfo');

Route::get('/changeprofilepic', [
	'uses' => 'EditProfileController@changeProfilePic',
	'middleware' => 'auth'
]);

Route::post('/changeprofilepic', ['uses' => 'EditProfileController@uploadProfilePic']);

Route::get('/changepassword', [
	'uses' => 'EditProfileController@changePassword',
	'middleware' => 'auth'
])->name('changepassword');

Route::put('/updatepassword', [
	'uses' => 'EditProfileController@updatePassword', 
	'middleware' => 'auth'
])->name('updatepassword');

Route::get('/deleteaccount', [
	'uses' => 'EditProfileController@deleteAccountPage',
	'middleware' => 'auth'
]);

Route::post('/deleteaccountpost', [
	'uses' => 'EditProfileController@deleteAccount'
])->name('deleteaccountpost');

/*
--------------------------------------------------------------------------
 Route is the same as CRUD
--------------------------------------------------------------------------

- Create an item
Route::post()

- Read an item
Route::get()

- Update an item
Route::put()

- Delete an item
Route::delete()

*/