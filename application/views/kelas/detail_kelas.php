<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>
<?php
  $warna = array('danger', 'warning', 'primary', 'success');
  $caption = array('Belum Buka', 'Daftar', 'Jalan', 'Selesai');
?>
<div class="box">
  <div class="box-body">
    <form>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputNamaPelatihan">Nama Pelatihan</label>
          <span class="form-control"><?=(!empty($detail)?$detail->nama_pelatihan:'')?></span>
        </div>
        <div class="form-group col-md-4">
          <label for="inputTanggalPelatihan">Nama Kelas</label>
          <span class="form-control"><?=(!empty($detail)?$detail->nama_kelas:'')?></span>
        </div>
        <div class="form-group col-md-4">
          <label for="inputTanggalPelatihan">Status Kelas</label>
          <span class="form-control btn btn-<?=$warna[$detail->status_kelas]?>">
            <?php echo $caption[$detail->status_kelas]; ?>
          </span>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputNamaPelatihan">Jumlah Topik</label>
          <span class="form-control"><?=(!empty($detail)?$detail->jumlah_materi:'')?></span>
        </div>
        <div class="form-group col-md-2">
          <label for="inputTanggalPelatihan">Jumlah Pemateri</label>
          <span class="form-control"><?=(!empty($detail)?$detail->jumlah_pemateri:'')?></span>
        </div>
        <div class="form-group col-md-4">
          <label for="inputTanggalPelatihan">Tanggal Buka</label>
          <span class="form-control"><?=(!empty($detail)?$detail->tgl_buka:'')?></span>
        </div>
        <div class="form-group col-md-4">
          <label for="inputTanggalPelatihan">Tanggal Selesai</label>
          <span class="form-control"><?=(!empty($detail)?$detail->tgl_selesai:'')?></span>
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
                  <a href="<?php echo base_url('Topik/tambahTopik'); ?>" class="btn btn-primary pull-right" style="margin-top:10px; margin-bottom:5px;"><i class="glyphicon glyphicon-plus-sign"></i>  Tambah Topik</a>
                </div>

                <div class="col col-md-12">
                  <!-- tabelTopik -->
                  <div class="table-responsive">
                    <table id="list-topik" class="table table-bordered table-striped">
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

              </div>

              <div class="tab-pane" id="tab_pemateri">
                <!-- tablePemateri -->
                <div class="col col-md-12">
                  <a href="<?php echo base_url('Pemateri/tambahPemateri'); ?>" class="btn btn-primary pull-right" style="margin-top:10px; margin-bottom:5px;"><i class="glyphicon glyphicon-plus-sign"></i>  Tambah Pemateri</a>
                </div>

                <div class="col col-md-12">
                  <div class="table-responsive">
                    <table id="list-pemateri" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID Pemateri</th>
                          <th>Nama Pemateri</th>
                          <th>Provinsi</th>
                          <th>Total Topik</th>
                          <th>Topik Diampu</th>
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
  </div>

  <?php echo $modal_tambah_pegawai; ?>

  <div id="tempat-modal"></div>

  <?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
  <?php
  $data['judul'] = 'Pegawai';
  $data['url'] = 'Pelatihan/homePelatihan';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
  ?>
