<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  
</div>

  <!-- /.box-header -->
  <div class="box-body">
  <div class="table-responsive">
  <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama Pelatihan</th>
          <th>Deskripsi Pelatihan</th>
          <th>Jumlah Kelas</th>
          <th>Jumlah Pemateri</th>
          <th>Status</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-pegawai">        
      </tbody>
    </table>
  </div>
  </div>
</div>

<?php echo $modal_tambah_pegawai; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Pegawai';
  $data['url'] = 'Pelatihan/homePelatihan';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>