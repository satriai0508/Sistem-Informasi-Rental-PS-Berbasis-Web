<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('price')->nullable();
            $table->string('waktu_sewa')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('device_id')->nullable();
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
        Schema::dropIfExists('rents');
    }
}
