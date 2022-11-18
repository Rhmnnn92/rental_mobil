      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>
          <a href="<?php echo base_url('admin/data_mobil/tambah_mobil')?>" class="btn btn-info mt-1 mb-4">Tambah Data</a>
          <table class="table table-hover table-striped table-borderd">
            <thead>
              <th>NO</th>
              <th>Gambar</th>
              <th>Type</th>
              <th>Merk</th>
              <th>No. Plat</th>
              <th>status</th>
              <th>Aksi</th>
            </thead>
            <tr>
              <?php $no = 1;
                foreach($mobil as $mb): ?>
                  <td><?php echo $no++ ?></td>
                  <td></td>
                  <td><?php echo $mb->kode_type?></td>
                  <td><?php echo $mb->merk?></td>
                  <td><?php echo $mb->no_plat?></td>
                  <td><?php
                  if ($mb->status == "0") {
                    echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                  }else {
                    echo "<span class='badge badge-primary'>Tersedia</span>";
                  }
                  ?>
                  </td> 
                  <td>
                    <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                  </td>                                     
                  <?php endforeach; ?>
              </td>
            </tr>
          </table>
        </section>
    </div>