<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br><br>
    <div class="container">
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
                                    <input type="text" name="mail_no_surat_masuk" class="form-control" id="no_surat">
                                </div>
                                <div class="form-group">
                                    <label for="asal_surat">Asal Surat</label>
                                    <input type="text" name="mail_asal_surat" class="form-control" id="asal_surat">
                                </div>
                                <div class="form-group">
                                    <label for="isi_surat">Isi Surat</label>
                                    <input type="text" name="mail_isi_surat" class="form-control" id="isi_surat">
                                </div>
                                <div class="form-group">
                                    <label for="kode_surat">Kode Surat</label>
                                    <input type="text" name="mail_kode" class="form-control" id="kode_surat">
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
                                    <input type="text" name="mail_keterangan_masuk" class="form-control" id="keterangan_masuk">
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>