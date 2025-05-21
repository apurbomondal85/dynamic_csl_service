<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asset_id');
            $table->string('name');
            $table->integer('quantity');
            $table->float('price');
            $table->float('total');
            $table->float('lose_or_profit');
            $table->string('sale_to');
            $table->date('sale_date')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('asset_sales');
    }
};
