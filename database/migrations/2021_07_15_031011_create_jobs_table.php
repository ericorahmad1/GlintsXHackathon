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
            $table->bigInteger('id_company')->nullable();
            $table->string('job_title')->nullable();
            $table->double('salary', 20, 2)->nullable();
            $table->string('yoe')->nullable();
            $table->string('education_level')->nullable();
            $table->string('carrer_level')->nullable();
            $table->string('category')->nullable();
            $table->string('job_location')->nullable();
            $table->date('job_start_date')->nullable();
            $table->date('job_end_date')->nullable();
            $table->string('job_type')->nullable();
            $table->timestamps();
        });

        // change id jobs
        Schema::table('jobs', function (Blueprint $table) {
            $table->renameColumn('id', 'id_job');
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
