<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGmanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmanagers', function (Blueprint $table) {
            $table->id();
            $table->string('Name',50);
            $table->text('Address');
            $table->string('Mobile_Num',20);
            $table->string('Mali_id',50);
            $table->string('Gender',10);
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
        Schema::dropIfExists('gmanagers');
    }
}
