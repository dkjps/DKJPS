<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-body">
    
  <form class="form-horizontal">

  <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Pelatihan</label>
    <div class="col-md-8">
      <select class="form-control"></select>
      <!-- <select type="text" class="form-control" id="namaKelas" placeholder="Nama Kelas"> -->
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Nama Kelas</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="namaKelas" placeholder="Nama Kelas">
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Jumlah Peserta Kelas</label>
    <div class="col-md-8">
      <input type="number" class="form-control" id="namaKelas" placeholder="Jumlah Peserta Kelas">
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Periode Kelas</label>
    <div class="col-md-3"style=>
      <input type="date" class="form-control" id="namaKelas" placeholder="Tanggal Mulai Kelas">
    </div>
    <div class="col-md-2 text-center" style="margin-top: 4px; margin-bottom: 4px;">
      <strong>s/d</strong>
    </div>
    <div class="col-md-3" >
      <input type="date" class="form-control" id="namaKelas" placeholder="Tanggal Selesai Kelas">
    </div>
    </div>

    <div class="form-group">
      <div class="col-md-2"></div>
      <div class="col-md-2 ">
      <a href="<?php echo base_url('Pelatihan/detailPelatihan'); ?>" class="btn btn-danger">Kembali</a>
      <button type="button" class="btn btn-primary">Simpan Kelas</button>
      </div>
    </div>

</form>

  </div>
</div>

<?php
  $data['judul'] = 'TambahPelatihan';
  $data['url'] = 'Pelatihan/addPelatihan';
?>
