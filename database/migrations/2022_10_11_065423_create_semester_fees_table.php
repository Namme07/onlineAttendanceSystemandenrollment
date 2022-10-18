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
        Schema::create('semester_fees', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('level');
            $table->string('semester');
            $table->integer('totalCreditHour');
            $table->integer('creditHourFee');
            $table->integer('totalCreditFee')->nullable();
            $table->integer('otherFees');
            $table->integer('totalSemesterFee')->nullable();
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
        Schema::dropIfExists('semester_fees');
    }
};
