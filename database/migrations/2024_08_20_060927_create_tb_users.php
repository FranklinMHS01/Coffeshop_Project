<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_level', function (Blueprint $table) {
            $table->increments('id_level');
            $table->string('nama_level', 255);
        });

        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('username', 255)->unique()->nullable();
            $table->string('password', 255);
            $table->integer('level')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_level');
        Schema::dropIfExists('tb_users');
    }
};
