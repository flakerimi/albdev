<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('experience_id')->index();
            $table->string('title');
            $table->string('company');
            $table->string('start_month')->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_month')->nullable();
            $table->string('end_year')->nullable();
            $table->text('description');
            $table->text('url');
            $table->text('active');
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
        Schema::dropIfExists('projects');
    }
}
