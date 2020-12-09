<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>
<?php
  $id = $this->uri->segment(3);
?>
<div class="box">
  <div class="box-body">
    <form method="post" action="<?=base_url('Pelatihan/'.$action.'Pelatihan/'.$id)?>">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputNamaPelatihan">Nama Kelas Pelatihan</label>
          <input name="nama" type="text" class="form-control" value="<?=(!empty($detail)?$detail->nama:'')?>" placeholder="Nama Pelatihan" required>
        </div>
      </div>
      <div class="form-group col-md-12">
        <label for="inputAddress">Deskripsi Pelatihan</label>
        <textarea class="form-control" cols="40" id="textarea" name="deskripsi" rows="10" style="resize:none" placeholder="Pelatihan ini tentang . . ." required><?=(!empty($detail)?$detail->deskripsi:'')?></textarea>
      </div>
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
      </div>
    </form>
  </div>
</div>

<?php
// $data['judul'] = 'TambahPelatihan';
// $data['url'] = 'Pelatihan/addPelatihan';
?>
