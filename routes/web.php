<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ShowController::class,'index'])->name('frontend.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//__Service Route__//
Route::middleware(['auth'])->group(function () {
Route::get('Details/Service/index', [ServiceController::class,'index'])->name('Details.Service.index')->middleware('auth');
Route::get('Details/Service/create', [ServiceController::class,'create'])->name('Details.Service.create');
Route::post('Details/Service/store', [ServiceController::class,'store'])->name('Details.Service.store');
Route::get('Details/Service/edit/{id}', [ServiceController::class,'edit'])->name('Details.Service.edit');
Route::post('Details/Service/update/{id}', [ServiceController::class,'update'])->name('Details.Service.update');
Route::get('Details/Service/delete/{id}', [ServiceController::class,'destroy'])->name('Details.Service.delete');

//Slider Route__//
Route::get('Details/Slider/index', [SliderController::class,'index'])->name('Details.Slider.index');
Route::get('Details/Slider/create', [SliderController::class,'create'])->name('Details.Slider.create');
Route::post('Details/Slider/store', [SliderController::class,'store'])->name('Details.Slider.store');
Route::get('Details/Slider/edit/{id}', [SliderController::class,'edit'])->name('Details.Slider.edit');
Route::post('Details/Slider/update/{id}', [SliderController::class,'update'])->name('Details.Slider.update');
Route::get('Details/Slider/delete/{id}', [SliderController::class,'destroy'])->name('Details.Slider.delete');

//Agency Route__//
Route::get('Details/Agency/index', [AgencyController::class,'index'])->name('Details.Agency.index');
Route::get('Details/Agency/create', [AgencyController::class,'create'])->name('Details.Agency.create');
Route::post('Details/Agency/store', [AgencyController::class,'store'])->name('Details.Agency.store');
Route::get('Details/Agency/edit/{id}', [AgencyController::class,'edit'])->name('Details.Agency.edit');
Route::post('Details/Agency/update/{id}', [AgencyController::class,'update'])->name('Details.Agency.update');
Route::get('Details/Agency/delete/{id}', [AgencyController::class,'destroy'])->name('Details.Agency.delete');


//Features Route__//
Route::get('Details/Features/index', [FeaturesController::class,'index'])->name('Details.Features.index');
Route::get('Details/Features/create', [FeaturesController::class,'create'])->name('Details.Features.create');
Route::post('Details/Features/store', [FeaturesController::class,'store'])->name('Details.Features.store');
Route::get('Details/Features/edit/{id}', [FeaturesController::class,'edit'])->name('Details.Features.edit');
Route::post('Details/Features/update/{id}', [FeaturesController::class,'update'])->name('Details.Features.update');
Route::get('Details/Features/delete/{id}', [FeaturesController::class,'destroy'])->name('Details.Features.delete');

//Projects Route__//
Route::get('Details/Projects/index', [ProjectsController::class,'index'])->name('Details.Projects.index');
Route::get('Details/Projects/create', [ProjectsController::class,'create'])->name('Details.Projects.create');
Route::post('Details/Projects/store', [ProjectsController::class,'store'])->name('Details.Projects.store');
Route::get('Details/Projects/edit/{id}', [ProjectsController::class,'edit'])->name('Details.Projects.edit');
Route::post('Details/Projects/update/{id}', [ProjectsController::class,'update'])->name('Details.Projects.update');
Route::get('Details/Projects/delete/{id}', [ProjectsController::class,'destroy'])->name('Details.Projects.delete');

//Team Route__//
Route::get('Details/Team/index', [TeamController::class,'index'])->name('Details.Team.index');
Route::get('Details/Team/create', [TeamController::class,'create'])->name('Details.Team.create');
Route::post('Details/Team/store', [TeamController::class,'store'])->name('Details.Team.store');
Route::get('Details/Team/edit/{id}', [TeamController::class,'edit'])->name('Details.Team.edit');
Route::post('Details/Team/update/{id}', [TeamController::class,'update'])->name('Details.Team.update');
Route::get('Details/Team/delete/{id}', [TeamController::class,'destroy'])->name('Details.Team.delete');

//Testimonial Route__//
Route::get('Details/Testimonial/index', [TestimonialController::class,'index'])->name('Details.Testimonial.index');
Route::get('Details/Testimonial/create', [TestimonialController::class,'create'])->name('Details.Testimonial.create');
Route::post('Details/Testimonial/store', [TestimonialController::class,'store'])->name('Details.Testimonial.store');
Route::get('Details/Testimonial/edit/{id}', [TestimonialController::class,'edit'])->name('Details.Testimonial.edit');
Route::post('Details/Testimonial/update/{id}', [TestimonialController::class,'update'])->name('Details.Testimonial.update');
Route::get('Details/Testimonial/delete/{id}', [TestimonialController::class,'destroy'])->name('Details.Testimonial.delete');


// price Route__//
Route::get('Details/price/index', [PriceController::class,'index'])->name('Details.price.index');
Route::get('Details/price/create', [PriceController::class,'create'])->name('Details.price.create');
Route::post('Details/price/store', [PriceController::class,'store'])->name('Details.price.store');
Route::get('Details/price/edit/{id}', [PriceController::class,'edit'])->name('Details.price.edit');
Route::post('Details/price/update/{id}', [PriceController::class,'update'])->name('Details.price.update');
Route::get('Details/price/delete/{id}', [PriceController::class,'destroy'])->name('Details.price.delete');


// Contact Route__//
Route::get('Details/Contact/index', [ContactController::class,'index'])->name('Details.Contact.index');
Route::get('Details/Contact/create', [ContactController::class,'create'])->name('Details.Contact.create');
Route::post('Details/Contact/store', [ContactController::class,'store'])->name('Details.Contact.store');
Route::get('Details/Contact/edit/{id}', [ContactController::class,'edit'])->name('Details.Contact.edit');
Route::post('Details/Contact/update/{id}', [ContactController::class,'update'])->name('Details.Contact.update');
Route::get('Details/Contact/delete/{id}', [ContactController::class,'destroy'])->name('Details.Contact.delete');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

