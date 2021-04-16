<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_url')->nullable();
            $table->longText('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('twitter_site')->nullable();
            $table->string('twitter_card')->nullable();
            $table->longText('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->longText('page_scripts')->nullable();
            $table->integer('seoable_id');
            $table->string('seoable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seos');
    }
}
