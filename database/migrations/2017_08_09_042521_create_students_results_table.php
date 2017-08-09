<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_results', function (Blueprint $table) {
            $table->increments('studnet_id');
            $table->string('studnet_name');
            $table->integer('studnet_class');
            $table->integer('studnet_roll');
            $table->string('studnet_result');
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
        Schema::dropIfExists('students_results');
    }
}
