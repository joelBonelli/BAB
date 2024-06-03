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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('autor', 50);
            $table->text('description')->nullable();
            $table->date('released_date')->nullable();
            $table->decimal('price', 8, 2);
            $table->tinyInteger('genre_id')->unsigned()->index();
            $table->string('image', 225)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
