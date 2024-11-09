<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('kustomer/edit') ?>" method="post">
                    <div class="mb-3">
                        <label for="nik">NIK <code>*</code></label>
                        <input class="form-control" type="hidden" name="id" value="<?= $kustomer->id; ?>" required />
                        <input class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" 
                            type="text" name="nik" value="<?= $kustomer->nik; ?>" placeholder="NIK" required />
                        <div class="invalid-feedback">
                            <?= form_error('nik') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name">NAMA <code>*</code></label>
                        <input class="form-control" type="text" name="name" value="<?= $kustomer->name; ?>" placeholder="NAMA" required />
                    </div>
                    <div class="mb-3">
                        <label for="alamat">ALAMAT</label>
                        <input class="form-control" type="text" name="alamat" value="<?= $kustomer->alamat; ?>" placeholder="ALAMAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="telp">TELP</label>
                        <input class="form-control" type="text" name="telp" value="<?= $kustomer->telp; ?>" placeholder="TELP" required />
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>
