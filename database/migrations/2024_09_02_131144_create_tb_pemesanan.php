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
        Schema::create('tb_pemesanan', function (Blueprint $table) {
            $table->increments('id_pemesanan')->lenght(15);
            $table->string('nama_pemesan', 255)->nullable();
            $table->string('gmail_pemesan', 255)->nullable();
            $table->string('nohp_pemesan', 255)->nullable();
            $table->enum('jenis_pemesanan', ['EatNow', 'TakeAway'])->nullable();
            $table->json('menu_dipesan');
            $table->integer('total')->lenght(255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pemesanan');
    }
};
