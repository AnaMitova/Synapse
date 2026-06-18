<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            // 'page' (default), 'modal', or 'external'
            $table->string('action_type')->default('page')->after('slug'); 
            // The URL if it goes to another site
            $table->string('action_url')->nullable()->after('action_type'); 
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['action_type', 'action_url']);
        });
    }
};