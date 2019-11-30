<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table    = 'suratmasuk';
    protected $fillable = ['mail_no_surat_masuk','mail_asal_surat','mail_isi_surat','mail_kode','mail_tgl_surat','mail_tgl_terima','mail_file_masuk','mail_keterangan_masuk'];
}
