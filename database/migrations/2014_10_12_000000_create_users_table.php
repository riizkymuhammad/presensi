<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('email')->unique();
            $table->enum('doskar',['dosen', 'tendik'])->nullable();
            $table->enum('status',['pns', 'pppk','tetap', 'kontrak'])->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('identity_number')->nullable();
            $table->string('homebase')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
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
        Schema::dropIfExists('users');
    }
}
