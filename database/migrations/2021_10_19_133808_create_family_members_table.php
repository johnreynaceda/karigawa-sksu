<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id');
             $table->string('surname')->nullable();
             $table->string('firstname')->nullable();
             $table->string('middlename')->nullable();
             $table->string('extension')->nullable();
             $table->string('birthdate')->nullable();
             $table->string('maiden')->nullable();
             $table->string('relationship')->nullable();
             $table->string('occupation')->nullable();
             $table->string('business_name')->nullable();
             $table->string('business_address')->nullable();
             $table->string('telephone')->nullable();
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
        Schema::dropIfExists('family_members');
    }
}
