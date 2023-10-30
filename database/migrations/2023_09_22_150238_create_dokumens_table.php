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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('spj_id');
            $table->string('program');
            $table->string('npd')->nullable();
            $table->string('pernyataan')->nullable();
            $table->string('stj_belanja')->nullable();
            $table->string('gambar')->nullable();
            $table->string('bku')->nullable();
            $table->string('belanja_adm')->nullable();
            $table->string('kwitansi')->nullable();
            $table->string('dftr_hdr')->nullable();
            $table->string('ssp')->nullable();
            $table->boolean('delstatus')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
