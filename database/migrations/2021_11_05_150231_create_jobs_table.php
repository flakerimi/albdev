<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
						$table->string('titile');
						$table->text('description');
						$table->foreignId('user_id');
						$table->foreignId('company_id');
						$table->integer('salary_from');
						$table->integer('salary_to');
						$table->json('perks');
						$table->string('type');
						$table->string('experience_level');
						$table->string('role');
						$table->string('industry');
						$table->json('skills_required');
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
        Schema::dropIfExists('jobs');
    }
}
