<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:30',
            'participants' => 'required|integer|min:1',
        ]);

        Registration::create($validated);

        return back()->with('success', 'Пријавата е успешно испратена!');
    }


}