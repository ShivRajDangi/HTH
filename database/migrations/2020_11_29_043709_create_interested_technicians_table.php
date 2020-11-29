<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestedTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interested_technicians', function (Blueprint $table) {
            $table->id();
            $table->integer('query_id')->nullable();
            $table->integer('technician_id')->nullable();
            $table->string('technician_name')->nullable();
            $table->string('technician_photo')->nullable();
            $table->string('technician_profession')->nullable();
            $table->string('technician_field')->nullable();
            $table->integer('technician_experience')->nullable();
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
        Schema::dropIfExists('interested_technicians');
    }
}
