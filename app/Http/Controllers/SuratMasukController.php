<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function Index(Request $request)
    {
        if ($request->has('cari')) {
            $data_surat_masuk = \App\SuratMasuk::where('mail_isi_surat','LIKE','%'.$request->cari.'%')->get(); 
        } else {
            $data_surat_masuk = \App\SuratMasuk::all(); 
        }
        return view('suratmasuk.index', ['data_surat_masuk' => $data_surat_masuk]);
    }
    
    public function Create(Request $request)
    {
        $request->validate([
            'mail_file_masuk.*' => 'mimes:jpg,jpeg,png,doc,docx,pdf | max:3024'
        ]);
        $res = new SuratMasuk();
        $res->mail_no_surat_masuk   = $request->input('mail_no_surat_masuk');
        $res->mail_asal_surat       = $request->input('mail_asal_surat');
        $res->mail_isi_surat        = $request->input('mail_isi_surat');
        $res->mail_kode             = $request->input('mail_kode');
        $res->mail_tgl_surat        = $request->input('mail_tgl_surat');
        $res->mail_tgl_terima       = $request->input('mail_tgl_terima');
        $res->mail_keterangan_masuk = $request->input('mail_keterangan_masuk');
        $file = $request->file('mail_file_masuk');
        $fileName = 'qia-' . time() . '.' . $file->getClientOriginalExtension();
        $file->move('datamasuk/', $fileName);
        $res->mail_file_masuk       = $fileName;
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

    public function Delete($mail_id_surat_masuk)
    {
        $data = \App\SuratMasuk::find($mail_id_surat_masuk);
        $data->delete($data);
        return redirect('/suratmasuk')->with('Sukses','Berhasil Dihapus');
    }
}
