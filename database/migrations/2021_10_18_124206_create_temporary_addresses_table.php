<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_addresses', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('refprovince_id')->nullable();
             $table->unsignedBigInteger('refcitymun_id')->nullable();
             $table->unsignedBigInteger('refbrgy_id')->nullable();
             $table->string('block')->nullable();
             $table->string('street')->nullable();
             $table->string('subdivision')->nullable();
             $table->string('zipcode')->nullable();
             $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('temporary_addresses');
    }
}
