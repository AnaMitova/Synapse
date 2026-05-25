<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Http\Controllers\QuestionController;
use App\Models\Question;
use App\Http\Controllers\ApplicationController;
use App\Models\Application;

Route::post('/academy', [ContactController::class, 'store'])->name('academy.store');

Route::post('/academy/apply', [ApplicationController::class, 'store'])
    ->name('applications.store');

Route::get('/admin/contacts', function () {

    $contacts = Contact::latest()->get();
    $applications = Application::latest()->get();
    $questions = Question::latest()->get();

    return view('admin.contacts', compact(
        'contacts',
        'applications',
        'questions'
    ));
});

Route::get('/home', function () {
    return view('home');
});


Route::post('/questions', [QuestionController::class, 'store'])
    ->name('questions.store');

Route::get('/admin/questions', function () {
    $questions = \App\Models\Question::latest()->get();

    return view('admin.questions', compact('questions'));
});

Route::get('/academy', function () {
    return view('academy');
});


