<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pj_code');
            $table->unsignedInteger('id_pm');
            $table->integer('status');
            $table->string('describe');
            $table->foreign('id_pm')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();// gom 2 truong create_at và update_at 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
