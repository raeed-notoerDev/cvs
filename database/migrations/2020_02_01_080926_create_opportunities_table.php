<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->default('waiting');
            $table->string('wanted_Job');
            $table->string('details_Job');
            $table->string('company_name');
            $table->bigInteger('specialization_id');
            $table->bigInteger('user_id');
            $table->string('city');
            $table->string('image')->nullable();
            $table->string('phone_number');
            $table->string('email');
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
        Schema::dropIfExists('opportunities');
    }
}
