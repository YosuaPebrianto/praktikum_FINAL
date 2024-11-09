<main>
  <div class="container-fluid">
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?= site_url('satuan/edit') ?>" method="post">
          <div class="mb-3">
            <label for="name">Nama Satuan <code>*</code></label>
            <input class="form-control" type="hidden" name="id" value="<?= $satuan->id; ?>" required />
            <input class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" 
                  type="text" name="name" value="<?= $satuan->name; ?>" placeholder="Nama Satuan" required />
            <div class="invalid-feedback">
              <?= form_error('name') ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input class="form-control" type="text" name="deskripsi" value="<?= $satuan->deskripsi; ?>" placeholder="Deskripsi" />
          </div>
          <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
    <div style="height: 100vh;"></div>
  </div>
</main>
