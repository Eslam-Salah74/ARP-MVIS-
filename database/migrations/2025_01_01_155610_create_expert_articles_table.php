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
        Schema::create('expert_articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expert_id')->constrained('experts')->nullable()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete()->nullable();
            $table->string('title')->nullable()->unique();
            $table->string('slug');
            $table->longText('content');
            $table->integer('order')->nullable();
            $table->integer('views')->default(0);
            $table->boolean('homepage')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_articles');
    }
};
