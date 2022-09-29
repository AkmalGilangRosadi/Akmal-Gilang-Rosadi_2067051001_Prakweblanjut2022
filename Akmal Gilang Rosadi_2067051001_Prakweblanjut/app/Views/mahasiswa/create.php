<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-6">
            <form action="/store" method="post">
                <div class="form-group">
                    <label for="npm">NPM MAHASISWA</label>
                    <input type="number" name="npm" class="form-control" id="npm">
                </div>
                <div class="form-group">
                    <label for="nama">NAMA MAHASISWA</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT MAHASISWA</label>
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>

            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Data</button>
    </form>

</div>

<?= $this->endsection('content'); ?>