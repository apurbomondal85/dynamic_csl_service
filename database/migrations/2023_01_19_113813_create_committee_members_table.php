<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('committee_id');
            $table->bigInteger('user_id');
            $table->string('designation');
            $table->string('image');
            $table->integer('vote')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('created_by');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('committee_members');
    }
};
