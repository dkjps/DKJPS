<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
  <div class="container">
  <div class="row">
    <div class="col align-self-end">
        <a href="<?php echo base_url('Pelatihan/tambahKelas'); ?>" class="btn btn-primary btn-block btn-flat" role="button" aria-pressed="true"><span>Tambah Kelas</span></a>
    </div>
    </div>

  </div>

    <!-- <div class="col-md-3">
        <a href="<?php echo base_url('Pegawai/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-pegawai"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>


  <!-- /.box-header -->
  <div class="box-body">
  <div class="table-responsive">
  <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Kelas</th>
          <th>Jumlah Peserta</th>
          <th>Jumlah Pemateri</th>
          <th>Periode Kelas</th>
          <th>Status</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="daftar-kelas">
        <?php $this->load->view('pelatihan/daftar_kelas'); ?>
      </tbody>
    </table>
  </div>
  </div>
</div>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Pelatihan';
  $data['url'] = 'Pelatihan/homePelatihan';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>
