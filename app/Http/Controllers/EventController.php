<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Add this line
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $query = Event::query();

        switch ($request->get('filter')) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'popular':
                $query->orderBy('views', 'desc');
                break;
            case 'newest':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $events = $query->get();

        // Use View::make instead of view() to make the editor happy
        return View::make('home', compact('events')); 
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        
        $event->increment('views');

        // Use View::make here too
        return View::make('events.show', compact('event'));
    }
    // --- ADMIN METHODS ---

    public function adminIndex()
    {
        $events = Event::latest()->get();
        return View::make('admin.events.index', compact('events'));
    }

    public function create()
    {
        return View::make('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badge' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'action_type' => 'required|string|in:page,modal,external',
            'action_url' => 'nullable|url',
        ]);

        $imagePath = $request->file('image')->store('events', 'public');

        Event::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'description' => $validated['description'],
            'badge' => $validated['badge'],
            'image' => $imagePath,
            'action_type' => $validated['action_type'],
            'action_url' => $validated['action_url'],
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Настанот е успешно креиран!');
    }

    public function edit(Event $event)
    {
        return View::make('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badge' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'action_type' => 'required|string|in:page,modal,external',
            'action_url' => 'nullable|url',
        ]);

        $data = [
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']), // Update slug if title changes
            'description' => $validated['description'],
            'badge' => $validated['badge'],
            'action_type' => $validated['action_type'],
            'action_url' => $validated['action_url'],
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $data['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Настанот е ажуриран!');
    }

    public function destroy(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }
        $event->delete();

        return back()->with('success', 'Настанот е избришан!');
    }
}