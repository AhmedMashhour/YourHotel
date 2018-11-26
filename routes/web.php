<?php



Route::get('/', function () {
    return view('index');
});
Route::post('user/follow', 'Admin_controller@follower');

Route::group(['prefix' => 'admin'], function () {

    Config::set('auth.defaults', 'admin');
    Route::get('login','Admin_controller@login');
    Route::post('login','Admin_controller@dologin');

Route::group(['middleware' => 'admin:admin'], function() {
    Route::get('/home','Admin_controller@index');

     Route::get('/roombook/{rid}', 'Admin_controller@showRoomBook');
     Route::get('/print/{id}', 'Admin_controller@print');
    Route::get('/roombook', 'Admin_controller@index');
    Route::get('/settings', 'Admin_controller@setting');
    Route::get('/room', 'Admin_controller@room');
     Route::get('/newsletter/{id}', 'Admin_controller@newsletterp');
     Route::get('/newsletterdel/{id}', 'Admin_controller@newsletterpdelete');
     Route::post('/updateuser', 'Admin_controller@updateuser');
     Route::post('/adduser', 'Admin_controller@adduser');
     Route::post('/deleteuser', 'Admin_controller@deleteuser');
     Route::get('/payment', 'Admin_controller@showPayment');
     Route::get('/usersetting', 'Admin_controller@usersetting');
     Route::get('/profit', 'Admin_controller@profit');
    Route::post('/conform','Admin_controller@conform');
    Route::post('/addroom','Admin_controller@addroom');
    Route::post('/delete_room','Admin_controller@delete_room');
    Route::get('/show/{id}','Admin_controller@show');
    Route::get('/home','Admin_controller@index');
    Route::get('/roomdel','Admin_controller@roomdel');

    Route::get('/messages','Admin_controller@messages');
    });
//
Route::any('logout', 'Admin_controller@logout');
});
Route::post('insert/reservation','Admin_controller@inser_reservation');
Route::get('/reservation',function (){
    return view('Admin.reservation');
});


