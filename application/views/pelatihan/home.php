<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">    
    <a href="<?php echo base_url('Pelatihan/tambahPelatihan'); ?>" class="btn btn-info pull-right" role="button" aria-pressed="true"><i class="glyphicon glyphicon-plus"></i> Tambah Pelatihan</a>
  </div>


  <!-- /.box-header -->
  <div class="box-body">
    <div class="">
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

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya', 'Tidak'); ?>
<?php
$data['judul'] = 'Pelatihan';
$data['url'] = 'Pelatihan/homePelatihan';
echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>
