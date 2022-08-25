<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_jemaahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('user_name')->nullable();
            $table->string('no_pendaftaran')->nullable();
            $table->date('pergi');
            $table->date('pulang');
            $table->string('paket')->nullable();
            $table->string('keterangan_paket_khusus')->nullable();
            $table->string('tipe_kamar');
            $table->string('nik')->unique();
            $table->string('nama_jemaah');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('gender');
            $table->string('pernikahan');
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('alamat');
            $table->string('no_paspor');
            $table->string('terbit');
            $table->string('expired');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('riwayat_penyakit')->nullable();
            $table->string('no_tlp');
            $table->string('no_tlp_1');
            $table->string('no_tlp_2')->nullable();
            $table->string('status_pembayaran');
            // $table->string('foto');
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
        Schema::dropIfExists('data_jemaahs');
    }
};
