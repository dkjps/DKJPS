<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
        <a href="<?php echo base_url('Pelatihan/AddPelatihan'); ?>" class="btn btn-primary btn-block btn-flat" role="button" aria-pressed="true"><span>Tambah Pelatihan</span></a>
    </div>
    <div class="col-md-3">
        <a href="<?php echo base_url('Pegawai/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-pegawai"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <div class="table-responsive">
  <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama Materi</th>
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