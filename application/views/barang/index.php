<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?php echo site_url('barang') ?>">barang</a></li>
    <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ol>
    <div class="crad mb-4">
      <div class="crad-header">
        <a href="<?php echo site_url('barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
      </div>
      <?php if ($this->session->flashdata('success')); ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php endif; ?>
      <div class="card-body">
      <form action="<?=php echo site_url('barang/save') ?>" method="post">
    <div class="mb-3">
        <label>Barkode <code>*</code></label>
        <input class="form-control" name="barkode" type="text" placeholder="Barkode">
    </div>
    <div class="mb-3">
        <label>Nama Barang <code>*</code></label>
        <input class="form-control" name="name" type="text" placeholder="Nama Barang">
    </div>
    <div class="mb-3">
        <label>Harga Beli <code>*</code></label>
        <input class="form-control" name="harga_beli" type="text" placeholder="Harga Beli">
    </div>
    <div class="mb-3">
        <label>Harga Jual <code>*</code></label>
        <input class="form-control" name="harga_jual" type="text" placeholder="Harga Jual">
    </div>
    <div class="mb-3">
        <label>Kategori <code>*</code></label>
        <select name="kategori" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?=php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Satuan <code>*</code></label>
        <select name="satuan" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($satuan as $s): ?>
                <option value="<?=php echo $s['id'] ?>"><?php echo $s['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Supplier <code>*</code></label>
        <select name="supplier" class="form-control" required>
            <option value="">- Pilih -</option>
            <?php foreach ($supplier as $sp): ?>
                <option value="<?=php echo $sp['id'] ?>"><?php echo $sp['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input class="form-control" name="stok" type="text" placeholder="Stok">
    </div>
    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
</form>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Barcode</th>
              <th>Name</th>
              <th>Satuan</th>
              <th>Kategori</th>
              <th>Stok</th>
              <th>harga_beli</th>
              <th>Harga_jual</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($barang as $barang) {
              echo "<tr>
              <td>$No</td>  
              <td>$Barang->barcode</td>
              <td>$Barang->name</td>
              <td>$Barang->satuan</td>
              <td>$Barang->kategori</td>
              <td>$Barang->stok</td>
              <td>$Barang->harga_beli</td>
              <td>$Barang->harga_jual</td>
              <td>
              <div>
              <a href=".base_url('barang/getedit/' . $barang->id)." class='btn btn-sm btn-info'><i class='fas fas-edit'></i> Edit</a>
              <a href=".base_url('barang/delete/' . $barang->id)." class='btn btn-sm btn-danger'
              onlick='return confrm(\"Ingin menghapus data user ini?\");'><i class='fas fa-trash'></i> Hapus</a>
              </div>
              </td>
              </tr>";
              $no++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>