<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('lastname', 50);
            $table->string('firstname', 50);
            $table->string('phone', 15);
            $table->string('address', 200);
            $table->integer('company');
            $table->integer('is_active');
            $table->integer('site')->references('site')->on('sites');
            $table->timestamp('last_update');
        });       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
