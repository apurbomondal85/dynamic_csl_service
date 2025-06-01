<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('slug')->nullable();
            $table->string('name');
            $table->string('description_title');
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('color')->nullable();
            $table->string('featured_image');
            $table->string('banner_image');
            $table->string('url')->nullable();
            $table->date('date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->foreignId('operator_id');
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
        Schema::dropIfExists('solutions');
    }
};
