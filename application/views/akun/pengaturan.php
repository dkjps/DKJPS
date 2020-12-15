<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<style>
.center-cropped {
  width: 100px;
  height: 100px;
  background-position: center center;
  background-repeat: no-repeat;
  margin-left: auto;
    margin-right: auto ;
}
</style>

 <!-- /.box-header -->
 <div class="box-body">
    <div class="tabbable-panel">
      <div class="tabbable-line">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#tab_profile" data-toggle="tab">
              Profil Akun </a>
            </li>
            <li>
              <a href="#tab_password" data-toggle="tab">
                Ubah Password </a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="tab_profile">
              <form id="tab">
                <br>
                <div class="col col-md-6 center-block"> 
                <div class="center-cropped img img-circle" 
                    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcyWUxDCRCf3MkdbBP8YjbCshKCgcZ7ICskQ&usqp=CAU');">
                </div>
                </div>

                <div class="col col-md-6">
                  <div class="col col-xs-6">
                  <br>  
                    <label>ID : </label>
                  </div>
                  <div class="col col-xs-6">
                  <br>  
                    <label>Tipe : </label>
                  </div>
                </div>
                <div class="col col-md-6">
                  <br>  
                  <label>Nama</label>
                  <input type="text"   class="form-control">
                </div>
                <div class="col col-md-6">
                  <br>  
                  <label>Email</label>
                  <input type="text"  class="form-control">
                </div>
                <div class="col col-md-6">
                  <br>  
                  <label>No Handphone</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col col-md-6">
                  <br>  
                  <label>Alamat</label>
                  <textarea  style="resize: none;"  class="form-control"></textarea>
                </div>
                <div class="col col-md-6 text-center">
                <br>
                    <button class="btn btn-primary">Update</button>
                </div>
              </form> 

              </div>

              <div class="tab-pane" id="tab_password">
             
              <form id="tab2">
                <div class="col col-md-6">
                  <br>  
                  <label>Password Lama</label>
                  <input type="password"   class="form-control">
                </div>
                <div class="col col-md-6">
                  <br>  
                  <label>Password Baru</label>
                  <input type="password"   class="form-control">
                </div>
                <div class="col col-md-6">
                  <br>  
                  <label>Password Baru Lagi</label>
                  <input type="password"   class="form-control">
                </div>
                <div class="col col-md-6 text-center">
                <br>
                    <button class="btn btn-primary">Simpan Password</button>
                </div>
              </form>

              </div>
            </div>
          </div>
        </div>
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