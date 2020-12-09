<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-body">
  <form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNamaPelatihan">Nama Pelatihan</label>
      <input type="text" class="form-control" readonly="readonly" id="inputEmail4" placeholder="Nama Pelatihan">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTanggalPelatihan">Nama Kelas</label>
      <input class="form-control" id="namaKelas" readonly="readonly" name="namaKelas" placeholder="Nama Kelas" type="text"/>
    </div>
    <div class="form-group col-md-4">
      <label for="inputTanggalPelatihan">Status Kelas</label>
      <a class="form-control btn btn-flat btn-success">berjalan</a>
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-2">
      <label for="inputNamaPelatihan">Jumlah Topik</label>
      <input type="text" class="form-control" readonly="readonly" id="inputEmail4" placeholder="Jumlah Materi">
    </div>
    <div class="form-group col-md-2">
      <label for="inputTanggalPelatihan">Jumlah Pemateri</label>
      <input class="form-control" id="namaKelas" readonly="readonly" name="namaKelas" placeholder="Jumlah Materi" type="text"/>
    </div>
    <div class="form-group col-md-8">
      <label for="inputTanggalPelatihan">Periode Kelas</label>
      <div class="form-row">
        <div class="form-group col-md-6">
        <input class="form-control" id="date" readonly="readonly" name="date" placeholder="MM/DD/YYY" type="date"/>
        </div>
        <div class="form-group col-md-6">
      <input class="form-control" id="date" readonly="readonly" name="date" placeholder="MM/DD/YYY" type="date"/>
        </div>

      </div>

    </div>
  </div>
  </form>
  </div>


  <!-- /.box-header -->
  <div class="box-body">
    <div class="tabbable-panel">
      <div class="tabbable-line">
        <ul class="nav nav-tabs">
          <li class="active">
                <a href="#tab_materi" data-toggle="tab">
                Daftar Topik </a>
              </li>
              <li>
                <a href="#tab_pemateri" data-toggle="tab">
                Daftar Pemateri </a>
              </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_materi">
              <div class="col col-md-12" style="margin-top:10px; margin-bottom:5px;">
              <a href<?php echo base_url('Topik/tambahTopik'); ?>" class="btn btn-primary" style="margin-top:10px; margin-bottom:5px;"><i class="glyphicon glyphicon-plus-sign"></i>  Tambah Topik</a>
              </div>
              
              <!-- tabelTopik -->
              <div class="table-responsive">
                <table id="list-data" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Topik Pelatihan</th>
                      <th>Nama Pemateri</th>
                      <th>Tanggal</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="daftar-topik">        
                  </tbody>
                </table>
          
              </div>
              
            </div>
            <div class="tab-pane" id="tab_pemateri">
              <!-- tablePemateri -->
              <div class="col col-md-12">
              <a href="" class="btn btn-primary" style="margin-top:10px; margin-bottom:5px;"><i class="glyphicon glyphicon-plus-sign"></i>  Tambah Pemateri</a>
              </div>

              <div class="table-responsive">
                <table id="list-data" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID Pemateri</th>
                      <th>Nama Pemateri</th>
                      <th>Provinsi</th>
                      <th>Total Materi</th>
                      <th>Materi Diampu</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="daftar-pemateri">        
                  </tbody>
                </table>
              </div>
              
          
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