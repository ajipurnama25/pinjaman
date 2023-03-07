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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->foreignId('kendaraan_id')->references('id')->on('kendaraan');
            $table->foreignId('users_id')->references('id')->on('users');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
