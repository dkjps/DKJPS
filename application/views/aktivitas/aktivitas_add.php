<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-body">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNamaPelatihan">Nama Aktivitas</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Aktivitas">
    </div>
    <div class="form-group col-md-6">
      <label for="inputTanggalPelatihan">Jam Aktivitas</label>
      <input class="form-control" id="date" name="date" placeholder="HH/MM/SS" type="time" readonly="readonly"/>
    </div>
  </div>


  <div class="form-group col-md-12">
    <label for="inputAddress">Deskripsi Aktivitas</label>
    <textarea class="form-control" cols="40" id="textarea" name="textarea" rows="10" style="resize:none" placeholder="Aktivitas anda ini tentang . . ."></textarea>
  </div>

  <div class="form-group col-md-12 text-center">
  <div class="col-md-12 col-xs-6">
  <a href="" class="btn btn-danger"><i class="fa fa-undo"></i> Kembali</a>
  </div>
  <div class="col-md-12 col-xs-6">
  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Aktivitas</button>
  </div>
  
  </div>

</form>
  </div>
</div>

<?php
  $data['judul'] = 'TambahPelatihan';
  $data['url'] = 'Pelatihan/addPelatihan';
?>
