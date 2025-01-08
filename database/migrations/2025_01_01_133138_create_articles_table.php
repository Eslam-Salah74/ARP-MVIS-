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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete()->nullable();
            $table->foreignId('author_id')->nullable()->constrained('authors')->cascadeOnDelete();
            $table->string('title')->unique()->nullable();
            $table->string('slug');
            $table->text('subtitle')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('image')->nullable();
            $table->text('summary')->nullable();
            $table->longText('content')->nullable();
            $table->integer('views')->default(0);
            // $table->boolean('whatNext')->default(0);
            // $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
