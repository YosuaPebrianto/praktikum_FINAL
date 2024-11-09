<main>
  <div class="container-fluid">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="<?= site_url('satuan') ?>">Satuan</a></li>
      <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?php echo site_url('satuan/save') ?>" method="post">
          <div class="mb-3">
            <label for="name">Nama Satuan <code>*</code></label>
            <input class="form-control" type="text" name="name" placeholder="Nama Satuan" required />
          </div>
          <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" />
          </div>
          <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
  </div>
  <div style="height: 100vh"></div>
</main>
