@extends('layouts.master')

@section('content')

        <h3>Form Edit Data</h3>
        @if (session('Sukses'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('Sukses') }}
            </div>
        @endif
        <div class="row">
            <div class="col-8">
                <form action="/suratmasuk/{{$data->mail_id_surat_masuk}}/update" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                    <input type="text" name="mail_no_surat_masuk" class="form-control" id="no_surat" placeholder="00/PAN/INSTANSI/XII/0000" value="{{ $data->mail_no_surat_masuk }}">
                    </div>
                    <div class="form-group">
                        <label for="asal_surat">Asal Surat</label>
                        <input type="text" name="mail_asal_surat" class="form-control" id="asal_surat" placeholder="Nama Instansi" value="{{ $data->mail_asal_surat }}">
                    </div>
                    <div class="form-group">
                        <label for="isi_surat">Isi Surat</label>
                        <input type="text" name="mail_isi_surat" class="form-control" id="isi_surat" placeholder="Perihal Surat" value="{{ $data->mail_isi_surat }}">
                    </div>
                    <div class="form-group">
                        <label for="kode_surat">Kode Surat</label>
                        <input type="text" name="mail_kode" class="form-control" id="kode_surat" placeholder="A" value="{{ $data->mail_kode }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_surat">Tanggal Surat</label>
                        <input type="date" name="mail_tgl_surat" class="form-control" id="tgl_surat" value="{{ $data->mail_tgl_surat }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_catat">Tanggal Catat</label>
                        <input type="date" name="mail_tgl_terima" class="form-control" id="tgl_catat" value="{{ $data->mail_tgl_terima }}">
                    </div>
                    <div class="form-group">
                        <label for="file_masuk">File</label>
                        <input type="file" name="mail_file_masuk" id="file_masuk" value="{{ $data->mail_file_masuk }}">
                    </div>
                    <div class="form-group">
                        <label for="keterangan_masuk">Keterangan</label>
                        <input type="text" name="mail_keterangan_masuk" class="form-control" id="keterangan_masuk" placeholder="Keterangan Surat" value="{{ $data->mail_keterangan_masuk }}">
                    </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="/suratmasuk/" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>

@endsection