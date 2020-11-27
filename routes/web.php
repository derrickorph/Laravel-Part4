<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Form;
use App\Http\Livewire\Action;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Product;
use App\Http\Livewire\Images;
use App\Http\Livewire\Uploads;
use App\Http\Livewire\Students;
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
    return view('welcome');
});
//Component
Route::get('/post', Post::class);

Route::get('/user', User::class);
//Routing
Route::get('/home/{name?}', Home::class);
//Binding
Route::get('/form', Form::class);
//Actions
Route::get('/action', Action::class);

Route::get('/action', Action::class);

//Livewire Life Cycle
Route::get('/product', Product::class);

//Form Validation
Route::get('/contact', Contact::class);

//Database With livewire
Route::get('/users', User::class);

//Database CRUD Modal livewire
Route::get('/students', Students::class);

//File Upload
Route::get('/uploads', Uploads::class);

//Multiple File Upload
Route::get('/upload-images', Images::class);
