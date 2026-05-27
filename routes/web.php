<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admindashboard', function () {
    $users = User::all();
    return view('admindashboard', compact('users'));
})->name('admindashboard.page');

Route::get('/register', function () {
    return view('register');
})->name('register.page');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return back();
    }

    session(['user_id' => $user->id]);

    return redirect()->route('main.page');
})->name('login.submit');

Route::get('/main', function () {
    return view('main');
})->name('main.page');

Route::post('/update-profile', function (Request $request) {
    $user = User::findOrFail(session('user_id'));

    $user->language = $request->language;
    $user->occupation = $request->occupation;

    $user->save();

    return redirect()->route('main.page');
})->name('profile.update');

Route::get('/admin-login', function () {
    return view('adminlogin');
})->name('adminlogin');

Route::post('/admin-login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (
        ! $user ||
        ! Hash::check($request->password, $user->password) ||
        $user->role !== 'admin'
    ) {
        return back();
    }

    return redirect()->route('admindashboard.page');
})->name('adminlogin.submit');

Route::delete('/users/{id}', function ($id) {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('admindashboard.page');
})->name('users.destroy');

Route::get('/users/{id}/edit', function ($id) {
    $user = User::findOrFail($id);

    return view('edit', compact('user'));
})->name('users.edit');

Route::put('/users/{id}', function (Request $request, $id) {
    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->language = $request->language;
    $user->occupation = $request->occupation;

    $user->save();

    return redirect()->route('admindashboard.page');
})->name('users.update');