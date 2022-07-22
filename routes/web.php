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
//    $file = json_decode(file_get_contents('./public/json/garden.json'));
//    foreach ( $file->gardens as $idx => $item){
//        $input = [];
//        $input['name'] = $item->name;
//        $input['phone'] = $item->phone;
//        $input['latitude'] = $item->latitude;
//        $input['longitude'] = $item->longitude;
//        $input['address'] = $item->address;
//        $input['management'] = $item->management;
//        $user = [];
//        $user['id'] = 'garden_'.$idx;
//        $user['password'] = '1234';
//        $user['name'] = $item->name.'의 정원매니저';
//        $user['type'] = 'management';
//        $user_asd = \App\User::create($user);
//        $input['user_id'] = 'garden_'.$idx;
//        $garden = \App\Garden::create($input);
//        foreach ($item->themes as $theme){
//            \App\Type::create(['garden_id'=>$garden['id'],'theme'=>$theme]);
//        }
//    }
    return view('index');
});

Route::get('/sign','UserController@signPage')->name('sign');
Route::post('/sign','UserController@sign')->name('sign');

Route::get('/login','UserController@loginPage')->name('login');
Route::post('/login','UserController@login')->name('login');

Route::get('/logout','UserController@logout')->name('logout');
Route::get('/guide','GardenController@guide')->name('guide');
Route::get('/promise','GardenController@promise')->name('promise');
Route::get('/history','GardenController@history')->name('history');

