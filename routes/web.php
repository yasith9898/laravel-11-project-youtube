<?php
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SliderController;
use App\Models\Slider;
use App\Models\Testimonial;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/', function () {


    $sliders = Slider::all();
    $testimonials = Testimonial::all();
    return view('frontend.home',compact('sliders','testimonials'));
});
Route::get('/dashboard', function () {
    return view('admin.dashbord');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SliderController::class)->middleware(['auth','verified'])->group(function (){
    Route::get('/SliderIndex','Index')->name('slider.index');
    Route::post('/saveSlider','storeslider')->name('slider.store');
    Route::post('/sliderUpdate','updateslider')->name('slider.update');
    Route::get('/deleteSlider/{id}','deleteslider')->name('slider.delete');
});

Route::controller(TestimonialController::class)->middleware(['auth','verified'])->group(function (){
    Route::get('/TestimonialIndex','Index')->name('Testimonial.index');
    Route::post('/saveTestimonial','storeTestimonial')->name('Testimonial.store');
    Route::post('/TestimonialUpdate','updateTestimonial')->name('Testimonial.update');
    Route::get('/deleteTestimonial/{id}','deleteTestimonial')->name('Testimonial.delete');
});

require __DIR__.'/auth.php';
