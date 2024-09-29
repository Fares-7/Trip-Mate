<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;

///front
Route::controller(FrontController::class)->name('front.')->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/about' ,'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/destination', 'destination')->name('destination');
    Route::post('subscribe/store','store')->name('subscriber.store');
});
require __DIR__.'/auth.php';
require __DIR__.'/adminAuth.php';


///Admin
Route::prefix('/admin')->name('admin.')->group(function(){
    //index
//    Route::view('/' , 'admindashboard/index')->name('dashboard');
   //destinations
   Route::resource('destination', DestinationController::class);

   //contact
   Route::controller(BackController::class)->group(function(){
    Route::get('/contact','contact')->name('contact.table');
}); 

}); 





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



