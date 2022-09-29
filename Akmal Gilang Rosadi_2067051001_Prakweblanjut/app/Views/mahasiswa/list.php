<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class='p-4'>
  <a href="/create" type="button" class="btn btn-primary"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Data</a>
  <div class="mb-3">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NPM</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">deskripsi</th>
          <th scope="col">created_at</th>
          <th scope=""></th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $mhs['npm'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['alamat'] ?></td>
            <td><?= $mhs['deskripsi'] ?></td>
            <td><?= $mhs['created_at'] ?></td>
            <td>
              <div class="d-flex">
                <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <form action="/delete/<?= $mhs['id'] ?>" method="post">
                  <input type="hidden" name="_methode" value="DELETE">
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
              </div>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>

  </div>
  <?= $this->endsection('content'); ?>