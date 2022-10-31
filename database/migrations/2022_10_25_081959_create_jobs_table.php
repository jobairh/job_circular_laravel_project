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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('company_id');
            $table->integer('vacancy');
            $table->string('employment_status');
            $table->string('experience');
            $table->integer('age');
            $table->string('job_location');
            $table->string('salary');
            $table->string('job_responsibilities');
            $table->string('educational_background');
            $table->string('skills');
            $table->text('compensation');
            $table->integer('annual_bonus');
            $table->integer('health_cost_bonus');
            $table->string('job_source');
            $table->dateTime('published_date');
            $table->dateTime('application_deadline_date');
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
};
