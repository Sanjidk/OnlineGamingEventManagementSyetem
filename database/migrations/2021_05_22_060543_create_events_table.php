<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('manager_id');
            $table->string('user_id');
            $table->string('max_participate');
            $table->string('admin_fee');
            $table->string('bkash');
            $table->string('transac_id');
            $table->string('fee');
            $table->string('eventName');
            $table->string('eventDate');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('banner');
            $table->string('status')->default('pending');

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
        Schema::dropIfExists('events');
    }
}
