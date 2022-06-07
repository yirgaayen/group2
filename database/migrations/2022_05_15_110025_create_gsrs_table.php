<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gsrs', function (Blueprint $table) {
            $table->string('id');
           $table->string('firstname');
           $table->string('middlename');
           $table->string('lastname');
           $table->string('yearofgraduation');
           $table->string('qualification');
           $table->string('gender');
           $table->string('department');
           $table->string('batch');

             
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
        Schema::dropIfExists('gsrs');
    }
};
