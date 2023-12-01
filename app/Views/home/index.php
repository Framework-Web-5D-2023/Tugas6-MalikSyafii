<?= $this->extend("layout/template"); ?>

<?= $this->section("content"); ?>
<?php $session = session(); ?>
<div class="container">
  <?php if ($session->getFlashdata("success")) : ?>
    <div class="alert alert-success" role="alert">

      <?= $session->getFlashdata("success"); ?>
    </div>
  <?php endif; ?>
  <h1><?= $title; ?></h1>
  <table class="table caption-top">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Nama</th>
        <th scope="col">NPM</th>
        <th scope="col">Prodi</th>
        <th scope="col">Action</th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($mahasiswa as $m) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><img src="<?= base_url("image/" . $m['image']); ?>" class="img-fluid rounded" style="width:80px; height:100px;" alt=""></td>
          <td><?= $m["nama"]; ?></td>
          <td><?= $m["npm"]; ?></td>
          <td><?= $m["prodi"]; ?></td>
          <td>
            <a href="<?= site_url("delete/" . $m["id"]); ?>" class="btn btn-danger btn-sm">Delete</a>
            <a href="<?= site_url("/" . $m["id"]); ?>" class="btn btn-primary btn-sm">Detail</a>
            <a href="<?= site_url("updateMahasiswa/" . $m["id"]); ?>" class="btn btn-primary btn-sm">Update</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Create
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Mahasiswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url("/create"); ?>" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-12 row mb-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" aria-label="Nama">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" id="npm" name="npm" class="form-control" placeholder="NPM" aria-label="NPM">
                  </div>
                </div>
              </div>

              <div class="col-12 row mb-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" id="prodi" name="prodi" class="form-control" placeholder="prodi" aria-label="prodi">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="minat">minat</label>
                    <input type="text" id="minat" name="minat" class="form-control" placeholder="minat" aria-label="NPM">
                  </div>
                </div>
              </div>

              <div class="col-12 row mb-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="domisili">Domisili</label>
                    <input type="text" id="domisili" name="domisili" class="form-control" placeholder="domisili" aria-label="domisili">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</lablabel>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                        <option value="">Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                      </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>