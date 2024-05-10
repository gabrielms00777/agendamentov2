<?php

use App\Livewire\{Client, Professional, Admin};
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// auth()->loginUsingId(1);
Route::view('/', 'welcome');

Route::prefix('app')->name('client.')->middleware(['auth','verifyUserType:client'])->group(function () {
    Route::get('/', Client\Dashboard::class)->name('dashboard');
    Route::get('/agendamentos', Client\Appointment\Index::class)->name('appointments.index');
    Route::get('/agendar', Client\Appointment\Create::class)->name('appointments.create');
    Route::get('/perfil', Client\Profile::class)->name('profile');

});

Route::prefix('profissional')->name('profissional.')->middleware(['auth','verifyUserType:professional'])->group(function () {
    Route::get('/', Professional\Dashboard::class)->name('dashboard');
    Route::get('/atendimentos', Professional\Appointment\Index::class)->name('appointments.index');
    Route::get('/agendar', Professional\Appointment\Create::class)->name('appointments.create');
    Route::get('/perfil', Professional\Profile::class)->name('profile');
    Route::get('/servicos', Professional\Services\Index::class)->name('services.index');
    Route::get('/clientes', Professional\Clients\Index::class)->name('clients.index');
    Route::get('/configuracoes', Professional\Configs::class)->name('configs');
});

Route::prefix('admin')->name('admin.')->middleware(['auth','verifyUserType:admin'])->group(function () {
    Route::get('/', Admin\Dashboard::class)->name('dashboard');  // List all clients

    // Route::get('/usuarios', Admin\User\Index::class)->name('users.index');  // List all users
    // Route::get('/configuracoes', Admin\Config::class)->name('configs');    // System configurations
    // Route::get('/estatisticas', Admin\Stats::class)->name('stats');        // System statistics

    Route::get('/clientes', Admin\Client\Index::class)->name('clients.index');  // List all clients
    Route::get('/profissionais', Admin\Professional\Index::class)->name('professionals.index');
    Route::get('/profissionais/create', Admin\Professional\Create::class)->name('professionals.create');
    Volt::route('/users', 'users.index');
});

Volt::route('/register', 'register');
Volt::route('/login', 'login')->name('login');

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');
