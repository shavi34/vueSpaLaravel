<?php

use Illuminate\Support\Facades\Request;
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

    return Inertia::render('Users/Index', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
                'active' => $user->active,
                'title' => $user->title,
                'company' => $user->company,
                'phone' => $user->phone
            ]),
        'filters' => Request::only('search'),
        'time' => now()->toTimeString(),
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd(request('foo'));
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users', function () {
    $attributes = Request::validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => 'required',
        'title' => 'required',
        'phone' => 'required',
        'company' => 'required',
        'role' => 'required',
    ]);
//    dd($attributes);
    User::create([
        'name' => Request::input('name'),
        'email' => Request::input('email'),
        'password' => Request::input('password'),
        'company' => Request::input('company'),
        'title' => Request::input('title'),
        'role' => Request::input('role'),
        'phone' => Request::input('phone'),
        'active' => 1,
    ]);
    return redirect('/users');
});
