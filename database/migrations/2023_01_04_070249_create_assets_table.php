<?php

use App\Library\Enum;
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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('parent_id')->nullable();
            $table->string('name');
            $table->string('asset_type');
            $table->text('description');
            $table->enum('status', array_keys(Enum::getAssetStatus()))->default(0)->comment("0 = good, 1 = damaged, 2 = lost");
            $table->integer('quantity');
            $table->float('price');
            $table->float('total');
            $table->integer('stock');
            $table->date('purchased_date');
            $table->date('warranty_date')->nullable();
            $table->text('vender_info');
            $table->string('attachments')->nullable();
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
        Schema::dropIfExists('assets');
    }
};
