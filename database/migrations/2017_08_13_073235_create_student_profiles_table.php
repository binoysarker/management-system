<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->string('student_fatherName');
            $table->string('student_motherName');
            $table->integer('student_mobileNumber');
            $table->string('student_email');
            $table->string('student_subject');
            $table->string('profile');
            $table->string('student_address');
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
        Schema::dropIfExists('student_profiles');
    }
}
