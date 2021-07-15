<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_owner')->nullable();
            $table->string('nama_company')->nullable();
            $table->string('departement_company')->nullable();
            $table->string('email')->nullable();
            $table->string('primary_telphone')->nullable();
            $table->string('secondary_telphone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('location')->nullable();
            $table->string('social_media')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('company');
    }
}
