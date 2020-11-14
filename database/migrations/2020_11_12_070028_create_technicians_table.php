<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')->nullable();
            $table->string('nice_name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('mobile');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('state')->nullable();
            $table->string('profile_photo')->nullable();
            $table->boolean('is_customer')->nullable()->default(false);
            $table->string('status')->nullable()->default(0);
            $table->string('field')->nullable();
            $table->string('sub_field')->nullable();
            $table->string('profession')->nullable();
            $table->string('rate')->nullable();
            $table->string('rating')->nullable();
            $table->string('google_id')->nullable();
            $table->string('payment_verified')->nullable()->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('technicians');
    }
}
