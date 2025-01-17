<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?php echo site_url('kategori') ?>">kategori</a></li>
    <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ol>
    <div class="crad mb-4">
      <div class="crad-header">
        <a href="<?php echo site_url('kategori/add') ?>"><i class="fas fa-plus"></i> Add New</a>
      </div>
      <?php if ($this->session->flashdata('success')); ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
      <?php endif; ?>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no =1;
            foreach ($kategori as $kategori){
              echo "<tr>
              <td> $no</td>
              <td>$kategori->name</td>
              <td>
              <div>
                <a href=",base_url('kategori/getedit/' . $kategori->id)." class='btn btn-sm btn_info'><i class='fas fa-edit'></i> Edit</a>
                <a href=",base_url('kategori/delete/' . $kategori->id)." class='btn btn-sm btn-danger'
                onlick='return confrm(\"Ingin menghapus data user ini?\");'><i class='fas fa-trash'></i> Hapus</a>
              </div>
              </td>
              </tr>";
              $no++;
            }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>