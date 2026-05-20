<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Http\Controllers\QuestionController;
use App\Models\Question;
use App\Http\Controllers\RegistrationController;
use App\Models\Registration;

    

Route::post('/academy', [ContactController::class, 'store'])->name('academy.store');

Route::get('/admin/contacts', function () {
    $contacts = Contact::latest()->get();
    $questions = Question::latest()->get();
    $registered = Registration::latest()->get();


    return view('admin.contacts', compact('contacts', 'questions', 'registered'));
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


Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

