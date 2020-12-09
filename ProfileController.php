<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
Route::group(['prefix' => 'bbb'])

Route::group(['prefix' => 'admin'], function(){
    Route::get('profile\create',
    'Admin\ProfileController@add')
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('profile\edit',
    'Admin\ProfileController@edit')    
});
}

