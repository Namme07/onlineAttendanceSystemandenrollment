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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentID');
            $table->string('studentName');
            $table->string('department');
            $table->string('faculty');
            $table->integer('session');
            $table->string('currentLevel');
            $table->string('currentSemester');
            $table->string('hall');
            $table->string('residentialStatus');
            $table->string('boardScholarship');
            $table->string('studentPhone');
            $table->string('studentEmail');
            $table->string('dob');
            $table->string('studentNID');
            $table->string('userType')->nullable();
            /*$table->string('fatherName');
            $table->string('fatherNID');
            $table->string('fatherOccupation');
            $table->string('fatherPhoneNumber');
            $table->string('fatherEmail');
            $table->string('motherName');
            $table->string('motherNID');
            $table->string('motherOccupation');
            $table->string('motherPhoneNumber');
            $table->string('motherEmail');
            $table->string('present_village_area');
            $table->string('present_upazilla');
            $table->string('present_district');
            $table->string('present_division');
            $table->string('present_postCode');
            $table->string('permanent_village_area');
            $table->string('permanent_upazilla');
            $table->string('permanent_district');
            $table->string('permanent_division');
            $table->string('permanent_postCode');*/
            $table->string('password')->default('password');
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
        Schema::dropIfExists('students');
    }
};
