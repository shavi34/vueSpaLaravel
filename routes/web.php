<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Models\User;
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
    // return inertia('Welcome');
    return Inertia::render('Home');
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'users'=> User::paginate(10)->through(fn($user)=>[
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role'  => $user->role,
            'active' => $user->active,
            'title' => $user->title,
            'company' => $user->company,
            'phone' => $user->phone
        ]),
      'time' => now()->toTimeString(),
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
  dd(request('foo'));
});
