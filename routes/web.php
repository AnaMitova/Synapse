<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Http\Controllers\QuestionController;
use App\Models\Question;


Route::post('/academy', [ContactController::class, 'store'])->name('academy.store');

Route::get('/admin/contacts', function () {
    $contacts = Contact::latest()->get();
    $questions = Question::latest()->get();

    return view('admin.contacts', compact('contacts', 'questions'));
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


