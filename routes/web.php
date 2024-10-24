<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Models\Mail;
use App\Models\contact;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Halaman login
Route::get('/', function() {
    return view('masuk.login');
})->name('login')->middleware('guest');

// Proses login
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute yang dilindungi
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [PageController::class, 'dashboard']) -> name('dashboard');
    Route::get('/aboutme', [PageController::class, 'aboutme']) -> name('aboutme');
    Route::get('/nama-dosen', [PageController::class, 'namaDosen']) -> name('nama-dosen');
    Route::get('/galery', [PageController::class, 'galery']) -> name('galery');
    Route::get('/contact', [PageController::class, 'contact']) -> name('contact');
    Route::get('/kalender', [PageController::class, 'kalender']) -> name('kalender');
    Route::get('/news', [PageController::class, 'news']) -> name('news');


    Route::get('/jadwal-smester-1', function(){
        $data = [
            'content'   =>  'post.jadwal-1'
        ];
        return view('pembungkus.wrapper', $data);
    })->name('jadwal-1');

    Route::get('/jadwal-smester-3', function(){
        $data = [
            'content'   =>  'post.jadwal-3'
        ];
        return view('pembungkus.wrapper', $data);
    })->name('jadwal-3');

    Route::get('/jadwal-smester-5', function(){
        $data = [
            'content'   =>  'post.jadwal-5'
        ];
        return view('pembungkus.wrapper', $data);
    })->name('jadwal-5');

    Route::get('/jadwal-smester-7', function(){
        $data = [
            'content'   =>  'post.jadwal-7'
        ];
        return view('pembungkus.wrapper', $data);
    })->name('jadwal-7');

    Route::post('/kirim', [MailController::class, 'kirim'])->name('kirim');
    Route::delete('/mails/{id}', [MailController::class, 'destroy'])->name('mails.destroy');
    Route::post('/kirim', [ContactController::class, 'kirim'])->name('kirim');

});
