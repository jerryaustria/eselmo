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

use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;

Auth::routes();


//Route::get('/Registration', 'Auth\RegisterController@show')->name('Userregister');


Route::get('/home', 'ContentsController@home');
Route::get('/', 'ContentsController@home')->name('home');
//Route::get('/', 'HomeController@index')->name('home');
Route::get('/client', 'ClientController@index')->name('index');

// UNITS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ UNITS

Route::get('my-properties','PropertyController@myProperties')->name('myProperties');


Route::get('/post', 'PropertyController@create')->name('postproperty');

//Route::post('/post', 'PropertyController@store')->name('postproperty');

Route::post('/addFeatures', 'PropertyFeaturesController@store');

Route::get('Units/{user_id}/delete', 'PropertyController@destroy')->name('Unitsdelete');
Route::post('Units/{user_id}/update', 'PropertyController@update')->name('Unitsupdate');

Route::resource('Units', 'PropertyController');

//Route::resource('Units','PropertyController',['name'=>[
//    'index'=>'Units.index',
//    'create'=>'Units.create',
//    'store'=>'Units.store',
//    'edit'=>'Units.edit'
//]]);

Route::delete('/delete/SelectedProperties','PropertyController@deleteSelectedProperties');


//COMMENTs ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::resource('Dashboard/Comments', 'unitCommentsController');
Route::resource('Dashboard/Comment/replies', 'CommentRepliesController');

//END COMMENTs ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//END USERS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::get('/quick-contact','PropertyController@send_email');

//EMAIL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++




//USERS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ USERS
Route::resource('dashboard/users','adminUsersController');

Route::get('User/Profile','UsersController@userProfile')->name('userProfile');


//Route::group(['middleware'=>'admin'], function(){
    Route::get('User/Profile/','UsersController@userProfile')->name('userProfile');
    Route::get('User/Profile/{user_id}','UsersController@AdminUsersView')->name('admin.users');
    Route::get('Userlist','UsersController@DisplayUsers')->name('users.display');
//});

//Jerry Feb 11 - change this in the future make this link to dashboard that only paid users can access..

Route::post('User/Profile/{user_id}','UsersController@update')->name('updateUser');
Route::post('User/Profile/password/{user_id}','UsersController@updatePassword')->name('updatePassword');
Route::get('User/delete/{user_id}','UsersController@destroy')->name('deleteUser');









//END OF EMAIL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//admin/users
Route::get('User/deleteAdmin/{user_id}','adminUsersController@destroy')->name('deleteAdmin');


Route::get('admin/users',function(){

    $users = User::all();
    return view('Readata',compact('users'));

});

Route::get('create/users',function(){


    $roles = Role::pluck('name','id')->all();

    return view('createData',compact('roles'));


});








// *****************************************************************

//Route::get('/', 'ContentsController@home')->name('homePage');
//
//
//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/home', 'HomeController@index')->name('Dashboard');
