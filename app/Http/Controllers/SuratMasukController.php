<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function Index()
    {
        $data_surat_masuk = \App\SuratMasuk::all(); 
        return view('suratmasuk.index', ['data_surat_masuk' => $data_surat_masuk]);
    }
    
    public function Create(Request $request)
    {
        $res = new SuratMasuk();
        $res->mail_no_surat_masuk   = $request->input('mail_no_surat_masuk');
        $res->mail_asal_surat       = $request->input('mail_asal_surat');
        $res->mail_isi_surat        = $request->input('mail_isi_surat');
        $res->mail_kode             = $request->input('mail_kode');
        $res->mail_tgl_surat        = $request->input('mail_tgl_surat');
        $res->mail_tgl_terima       = $request->input('mail_tgl_terima');
        $res->mail_keterangan_masuk = $request->input('mail_keterangan_masuk');
        $file = $request->file('mail_file_masuk');
        $file->move('datamasuk/', $file->getClientOriginalName());
        $res->mail_file_masuk       = $file->getClientOriginalName();
        $res->save();
        // \App\SuratMasuk::create($request->all());
        return redirect('/suratmasuk')->with("Sukses", "Berhasil Ditambahkan");
    }

    public function Edit($mail_id_surat_masuk)
    {
        $data = \App\SuratMasuk::find($mail_id_surat_masuk);
        return view('suratmasuk/edit',['data' => $data]);
    }

    public function Update(Request $request, $mail_id_surat_masuk)
    {
        $data = \App\SuratMasuk::find($mail_id_surat_masuk);
        $data->update($request->all());
        return redirect('/suratmasuk')->with('Sukses','Berhasil Diganti');
    }
}
