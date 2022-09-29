<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="P-4">
    <div class="container" mt-5 mb-3>
        <div class="row">
            <div class="col-6">
                <form action="/update/<?= $mahasiswa['id'] ?>" method="POST">

                    <div class="form-group">
                        <label for="npm">NPM MAHASISWA</label>
                        <input type="text" name="npm" class="form-control" id="npm" value="<?= $mahasiswa['npm'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA MAHASISWA</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT MAHASISWA</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
                    </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $mahasiswa['deskripsi'] ?>"> </textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Edit Data</button>
        </form>
    </div>

<?= $this->endsection('content'); ?>