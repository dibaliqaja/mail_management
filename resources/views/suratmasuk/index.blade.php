@extends('layouts.master')

@section('content')

        @if (session('Sukses'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('Sukses') }}
            </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h3>Data Surat Masuk</h3>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/suratmasuk/create" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="no_surat">No Surat</label>
                                    <input type="text" name="mail_no_surat_masuk" class="form-control" id="no_surat" placeholder="00/PAN/INSTANSI/XII/0000">
                                </div>
                                <div class="form-group">
                                    <label for="asal_surat">Asal Surat</label>
                                    <input type="text" name="mail_asal_surat" class="form-control" id="asal_surat" placeholder="Nama Instansi">
                                </div>
                                <div class="form-group">
                                    <label for="isi_surat">Isi Surat</label>
                                    <input type="text" name="mail_isi_surat" class="form-control" id="isi_surat" placeholder="Perihal Surat">
                                </div>
                                <div class="form-group">
                                    <label for="kode_surat">Kode Surat</label>
                                    <input type="text" name="mail_kode" class="form-control" id="kode_surat" placeholder="A">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_surat">Tanggal Surat</label>
                                    <input type="date" name="mail_tgl_surat" class="form-control" id="tgl_surat">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_catat">Tanggal Catat</label>
                                    <input type="date" name="mail_tgl_terima" class="form-control" id="tgl_catat">
                                </div>
                                <div class="form-group">
                                    <label for="file_masuk">File</label>
                                    <input type="file" name="mail_file_masuk" id="file_masuk">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan_masuk">Keterangan</label>
                                    <input type="text" name="mail_keterangan_masuk" class="form-control" id="keterangan_masuk" placeholder="Keterangan Surat">
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Asal Surat</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Tgl Surat</th>
                        <th scope="col">Tgl Terima</th>
                        <th scope="col">File</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $no = 0; ?>
                @foreach ($data_surat_masuk as $surat_masuk)
                <?php $no++; ?>
                <tbody>
                        <td>{{ $no }}</td>
                        <td>{{ $surat_masuk->mail_no_surat_masuk }}</td>
                        <td>{{ $surat_masuk->mail_asal_surat }}</td>
                        <td>{{ $surat_masuk->mail_isi_surat }}</td>
                        <td>{{ $surat_masuk->mail_kode }}</td>
                        <td>{{ $surat_masuk->mail_tgl_surat }}</td>
                        <td>{{ $surat_masuk->mail_tgl_terima }}</td>
                        <td>{{ $surat_masuk->mail_file_masuk }}</td>
                        <td>{{ $surat_masuk->mail_keterangan_masuk }}</td>
                        <td>
                            <a href="/suratmasuk/{{ $surat_masuk->mail_id_surat_masuk }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/suratmasuk/{{ $surat_masuk->mail_id_surat_masuk }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data akan Dihapus?')">Delete</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection