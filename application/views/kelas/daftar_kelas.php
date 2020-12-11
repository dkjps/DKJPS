<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <a href="<?php echo base_url('Kelas/tambahKelas'); ?>" class="btn btn-info pull-right" role="button" aria-pressed="true"><i class="glyphicon glyphicon-plus"></i> Tambah Kelas</a>
</div>


<!-- /.box-header -->
<div class="box-body">
  <div class="">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Kelas</th>
          <th>Pelatihan</th>
          <th>Peserta</th>
          <th>Pemateri</th>
          <th>Tgl Buka</th>
          <th>Tgl Selesai</th>
          <th>Status</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="daftar-kelas">
        <?php $this->load->view('kelas/data_kelas'); ?>
      </tbody>
    </table>
  </div>
</div>
</div>
