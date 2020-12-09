<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-body">
    
  <form class="form-horizontal">

  <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Kelas</label>
    <div class="col-md-8">
      <select readonly="readonly" class="form-control"></select>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Judul Topik</label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="namaKelas" placeholder="Nama Topik">
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Pilih Pemateri</label>
    <div class="col-md-8">
      <select name="" id="" class="form-control">
        <option value="">pilih pemateri</option>
      </select>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label" for="inputNamaPelatihan">Waktu Topik</label>
    <div class="col-md-3"style=>
      <input type="date" class="form-control" id="namaKelas" placeholder="Tanggal Mulai">
      <span  class="form-text text-muted" >Tanggal Mulai</span>
    </div>
    <div class="col-md-3" >
      <input type="time" class="form-control" id="namaKelas" placeholder="Jam Mulai">
      <span class="form-text text-muted" >Jam Mulai</span>
    </div>
    </div>

    <div class="form-group">
      <div class="col-md-2"></div>
      <div class="col-md-2 ">
      <a href="<?php echo base_url('Kelas'); ?>" class="btn btn-danger">Kembali</a>
      <button type="button" class="btn btn-primary">Simpan Topik</button>
      </div>
    </div>

</form>

  </div>
</div>

<?php
  $data['judul'] = 'TambahPelatihan';
  $data['url'] = 'Pelatihan/addPelatihan';
?>
