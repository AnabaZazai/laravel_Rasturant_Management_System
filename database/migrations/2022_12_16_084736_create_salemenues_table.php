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
        Schema::create('salemenues', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->unsignedBigInteger('menue_id')->nullable();
            $table->foreign('menue_id')->references('id')->on('menues')->onUpdate('cascade')->onDelate('set null');
            // $table->unsignedBigInteger('sale_id')->nullable();
            // $table->foreign('sale_id')->references('id')->on('sales')->onUpdate('cascade')->onDelate('set null');
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
        Schema::dropIfExists('salemenues');
    }
};
