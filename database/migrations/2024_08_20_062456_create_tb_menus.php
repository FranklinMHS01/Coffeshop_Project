<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_menus', function (Blueprint $table) {
            $table->increments('id_menu')->lenght(15);
            $table->string('nama_menu', 255)->nullable();
            $table->string('jenis_menu', 255)->nullable();
            $table->integer('quantity')->length(255)->nullable();  
            $table->bigInteger('harga')->length(255)->nullable();  
            $table->string('img_menu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_menus');
    }
};
