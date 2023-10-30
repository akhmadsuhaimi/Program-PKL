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
        Schema::create('spj', function (Blueprint $table) {
            $table->id();
            $table->string('kode_program');
            $table->string('pptk');
            $table->bigInteger('bagian_id');
            $table->string('program');
            $table->string('kegiatan');
            $table->string('sub_kegiatan');
            $table->bigInteger('belanja_id');
            $table->date('tgl');
            $table->string('status');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spj');
    }
};
