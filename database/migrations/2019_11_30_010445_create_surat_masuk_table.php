<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->bigIncrements('mail_id_surat_masuk');
            $table->string('mail_no_surat_masuk', 70);
            $table->string('mail_asal_surat', 150);
            $table->text('mail_isi_surat');
            $table->string('mail_kode', 5);
            $table->date('mail_tgl_surat');
            $table->date('mail_tgl_terima');
            $table->string('mail_file_masuk', 300);
            $table->text('mail_keterangan_masuk');
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
        Schema::dropIfExists('suratmasuk');
    }
}
