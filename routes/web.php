<?php


use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\ViewCustomer;
use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/customers/create', CreateCustomer::class);
Route::get('/customers', Customers::class);
Route::get('customers/{customer}', ViewCustomer::class);
Route::get('customers/{customer}/edit', EditCustomer::class);
