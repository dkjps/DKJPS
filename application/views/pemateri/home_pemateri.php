<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6 pull-right" style="padding: 0;">
        <a href="<?php echo base_url('tambahData/addPelatihan'); ?>" class="btn btn-primary btn-block btn-flat" role="button" aria-pressed="true"><span><i class="glyphicon glyphicon-plus-sign"></i> Tambah Pelatihan</span></a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <div class="table-responsive">
  <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID Pemateri</th>
          <th>Nama Pemateri</th>
          <th>Asal Provinsi</th>
          <th>Jumlah Kelas</th>
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
  $data['url'] = 'Pegawai/import';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>