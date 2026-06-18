<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
protected $fillable = [
        'title',
        'description',
        'image',
        'badge',
        'slug',
        'views',
        'action_type', // Added this
        'action_url'   // Added this
    ];

    // Automatically generate a slug from the title when creating an event
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->title);
            }
        });
    }
}