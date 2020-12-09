<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="container">
      <div class="row">
        <div class="col align-self-end">
          <a href="<?php echo base_url('Pelatihan/tambahPelatihan'); ?>" class="btn btn-primary btn-block btn-flat" role="button" aria-pressed="true"><span>Tambah Pelatihan</span></a>
        </div>
      </div>      
    </div>
  </div>


  <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <table id="list-data" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Pelatihan</th>
            <th>Deskripsi Pelatihan</th>
            <th style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody id="daftar-pelatihan">
        </tbody>
      </table>
    </div>
  </div>
</div>


<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini', base_url()); ?>
<?php
$data['judul'] = 'Pelatihan';
$data['url'] = 'Pelatihan/homePelatihan';
echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>
