<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')->nullable();
            $table->string('nice_name')->nullable();
            $table->string('email')->unique();
             $table->string('password')->nullable();
            $table->string('mobile');
            $table->string('profile_photo')->nullable();
            $table->boolean('is_super')->nullable()->default(false);
            $table->string('status')->nullable()->default(0);
            $table->string('role')->nullable()->default('admin');
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
        Schema::dropIfExists('admins');
    }
}
