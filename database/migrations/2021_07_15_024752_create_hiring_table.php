<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiring ', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_users_account')->nullable();
            $table->bigInteger('id_job')->nullable();
            $table->smallInteger('status')->nullable();
            // Status Hiring
            // 0 = terkirim
            // 1 = dalam review
            // 2 = interview
            // 3 = assessment
            // 4 = penawaran
            // 5 = di terima -> setelah itu memberi rating
            // 6 = tidak di terima -> setelah itu memberi rating
            $table->integer('review')->nullable();
            // isinya bintang dengan max 5 
            $table->string('feedback')->nullable();
            // isinya array feedback positif dan negatif
            $table->timestamps();
        });

        // change id hiring
        Schema::table('hiring', function (Blueprint $table) {
            $table->renameColumn('id', 'id_hiring');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hiring ');
    }
}
