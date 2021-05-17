<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('contain');
            $table->string('fee');
            $table->string('orgName');
            $table->string('manager');
            $table->string('email');
            $table->string('phone');
            $table->string('eventName');
            $table->string('place');
            $table->string('eventDate');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('food');
            $table->string('banner');
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
        Schema::dropIfExists('managers');
    }
}
