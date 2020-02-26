<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('specialization_id');
            $table->string('Job_title');
            $table->string('name');
            $table->string('nationality');
            $table->string('phone_number');
            $table->string('email');
            $table->string('birth_day');
            $table->string('birth_month');
            $table->string('birth_year');
            $table->string('address');
            $table->string('hobbies')->nullable();
            $table->string('image')->nullable();
            $table->string('country_residence');
            $table->string('note')->nullable();
            $table->string('interests')->nullable();
            $table->string('status')->default('waiting');
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
        Schema::dropIfExists('cvs');
    }
}
