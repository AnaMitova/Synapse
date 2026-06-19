<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Add these Facade imports to fix the editor errors
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

// Frontend Controllers
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ApplicationController;

// Models (Used in Admin Closure)
use App\Models\Contact;
use App\Models\Application;
use App\Models\Question;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Public Frontend Routes
|--------------------------------------------------------------------------
*/

// Home / Events Grid Page 
Route::get('/', [EventController::class, 'index'])->name('events.index');

// Single Event View Page 
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

// Academy Pages & Form Submissions
Route::get('/academy', function () {
    return View::make('academy'); // Changed to View::make
});
Route::post('/academy', [ContactController::class, 'store'])->name('academy.store');
Route::post('/academy/apply', [ApplicationController::class, 'store'])->name('applications.store');

// Questions Form Submission
Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');


/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', function () {
    return View::make('admin.login'); // Changed to View::make
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    if ($request->password === env('ADMIN_PASSWORD')) {
        
        Session::put('admin_authenticated', true); // Changed to Session::put

        return Redirect::to('/admin'); // Changed to Redirect::to
    }

    return Redirect::back()->withErrors([ // Changed to Redirect::back
        'password' => 'Incorrect password.'
    ]);
});


/*
|--------------------------------------------------------------------------
| Protected Admin Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::middleware('admin.password')->prefix('admin')->group(function () {

    // Main Dashboard Overview
  Route::get('/', function () {
        $contacts = Contact::latest()->get();
        $applications = Application::latest()->get();
        $questions = Question::latest()->get();
        
        // ADD THIS LINE: Fetch the events
        $events = Event::latest()->get(); 

        // UPDATE THIS LINE: Add 'events' to the compact array
        return View::make('admin.admin', compact('contacts', 'applications', 'questions', 'events'));
    });
    // Custom Admin Event Management
    Route::get('/events', [EventController::class, 'adminIndex'])->name('admin.events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::post('/events', [EventController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');
    

});
Route::post('/events/{event}/increment-views', [App\Http\Controllers\EventController::class, 'incrementViews'])->name('events.increment-views');