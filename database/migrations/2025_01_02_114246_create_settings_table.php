<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('sitename')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('headerTitle')->nullable();
            $table->text('headerSubtitle')->nullable();
            $table->text('headerBackground')->nullable();
            $table->text('footerBackground')->nullable();
            $table->text('footerLogo')->nullable();
            $table->text('socialmedia')->nullable();
            $table->text('location')->nullable();
            $table->text('contactus')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
