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
    <br>
    <div class="container">
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
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>