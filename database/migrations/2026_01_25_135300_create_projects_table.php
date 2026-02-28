<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('url')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->json('technologies');
            $table->string('client');
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable()->unique();
            $table->decimal('budget', 20, 2)->default(0);
            $table->string('progress')->default(0);
            $table->string('status');
            $table->date('from');
            $table->date('to');
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->foreignIdFor(\App\Models\Category::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
