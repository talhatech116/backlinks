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
        Schema::create('publisher_websites', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('country');
            $table->integer('image_per_post');
            $table->integer('maximum_links');
            $table->string('type_of_links');
            $table->json('web_categories');
            $table->json('delicated_topics')->nullable();
            $table->string('sponsor');
            $table->decimal('normal_price', 8, 2);
            $table->decimal('topic_price', 8, 2)->nullable();
            $table->decimal('eight_hundred', 8, 2)->nullable();
            $table->decimal('one_thousand', 8, 2)->nullable();
            $table->decimal('twelve_hundred', 8, 2)->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->decimal('price_per_diffusion', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publisher_websites');
    }
};
