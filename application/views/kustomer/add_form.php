<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('kustomer/save') ?>" method="post">
                    <div class="mb-3">
                        <label for="nik">NIK <code>*</code></label>
                        <input class="form-control" type="text" name="nik" placeholder="NIK" required />
                    </div>
                    <div class="mb-3">
                        <label for="name">NAMA <code>*</code></label>
                        <input class="form-control" type="text" name="name" placeholder="NAMA" required />
                    </div>
                    <div class="mb-3">
                        <label for="alamat">ALAMAT</label>
                        <input class="form-control" type="text" name="alamat" placeholder="ALAMAT" required />
                    </div>
                    <div class="mb-3">
                        <label for="telp">TELP</label>
                        <input class="form-control" type="text" name="telp" placeholder="TELP" required />
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div style="height: 100vh"></div>
</main>
