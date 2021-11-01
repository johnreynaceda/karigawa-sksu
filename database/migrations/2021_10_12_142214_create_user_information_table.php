<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id');
             $table->string('firstname')->nullable();
             $table->string('middlename')->nullable();
             $table->string('lastname')->nullable();
             $table->string('extension')->nullable();
             $table->string('age')->nullable();
             $table->string('birthdate')->nullable();
             $table->string('place_of_birth')->nullable();
             $table->string('sex')->nullable();
             $table->string('civil_status')->nullable();
             $table->string('citizenship')->nullable();
             $table->string('height')->nullable();
             $table->string('weight')->nullable();
             $table->string('blood_type')->nullable();
             $table->string('gsis_no')->nullable();
             $table->string('pagibig_no')->nullable();
             $table->string('philhealth_no')->nullable();
             $table->string('sss_no')->nullable();
             $table->string('tin_no')->nullable();
             $table->string('agency_employee_no')->nullable();
             $table->string('telephone')->nullable();
             $table->string('mobile')->nullable();
             $table->string('email')->nullable();
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
        Schema::dropIfExists('user_information');
    }
}
