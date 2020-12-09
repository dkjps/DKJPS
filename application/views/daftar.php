<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Panitia</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  </head>

  <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

  <body class="hold-transition login-page">
  
  <div class="login-box">
  <div class="login-logo">
    Daftar Panitia <br> <b>TerasAsuh</b>
  </div>

  <div class="login-box-body">
  <form class="form-horizontal">
  <div class="form-group">
    <label for="text1" class="control-label col-md-2">Nama</label> 
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-user"></i>
        </div> 
        <input id="text1" name="text1" placeholder="masukkan nama" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text2" class="control-label col-md-2">Email</label> 
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-cc"></i>
        </div> 
        <input id="text2" name="text2" placeholder="masukkan email" type="email" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text" class="control-label col-md-2">Nomor Telefon</label> 
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-phone"></i>
        </div> 
        <input id="text" name="text" placeholder="masukkan nomor" type="number" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text4" class="control-label col-md-2">Tanggal Lahir</label> 
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div> 
        <input id="text4" name="text4" placeholder="Pilih tanggal lahir" type="date" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="radio" class="control-label col-md-2">Jenis Kelamin</label> 
    <div class="col-md-8">
      <label class="radio-inline">
        <input type="radio" name="radio" value="0">
              Laki - laki
      </label>
      <label class="radio-inline">
        <input type="radio" name="radio" value="1">
              Perempuan
      </label>
    </div>
  </div>
  <div class="form-group">
    <label for="text3" class="control-label col-md-2">Password</label> 
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-lock"></i>
        </div> 
        <input id="text3" name="text3" placeholder="password anda" type="password" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="text3" class="control-label col-md-2">Password Ulang</label> 
    <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-lock"></i>
        </div> 
        <input id="text3" name="text3" placeholder="tulis ulang password anda" type="password" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="select1" class="control-label col-md-2">Tipe Panitia</label> 
    <div class="col-md-8">
      <select id="select1" name="select1" class="select form-control" required="required">
        <option value="rabbit">Admin / Operator</option>
        <option value="duck">Pemateri</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="select" class="control-label col-md-2">Asal Provinsi</label> 
    <div class="col-md-8">
      <select id="select" name="select" class="select form-control">
      </select>
    </div>
  </div> 
  <div class="form-group">
    <label for="select" class="control-label col-md-2">Asal Kabupaten / Kota</label> 
    <div class="col-md-8">
      <select id="select" name="select" class="select form-control">
      </select>
    </div>
  </div> 
  <div class="form-group">
    <label for="select" class="control-label col-md-2">Asal Kecamatan</label> 
    <div class="col-md-8">
      <select id="select" name="select" class="select form-control">
      </select>
    </div>
  </div> 
  <div class="form-group">
    <label for="select" class="control-label col-md-2">Asal Desa</label> 
    <div class="col-md-8">
      <select id="select" name="select" class="select form-control">
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="col col-md-12 ">
      <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
    </div>
  </div>
  <div class="form-group row">
  <div class="col col-md-12  text-center">
      <a class="btn" href="<?php echo base_url('Daftar'); ?>">Sudah punya akun ? Login Disini</a>
    </div>
  </div>
</form>  
  </div>
  
  </div>

   
   
   
    <!-- <div class="login-box"> -->
      <!-- <div class="login-logo">
        <a href="<?php echo base_url(); ?>assets/index2.html">Panitia<br><b>TerasAsuh</b></a>
      </div> -->


      <!-- /.login-logo -->
      <!-- <div class="login-box-body"> -->
   
  

        <!-- <form action="<?php echo base_url('Auth/login'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          <div class="col col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <div class="col col-md-12" style="margin-top:4px; margin-bottom:4px;"></div>
            <div class="col col-xs-12  text-center">
              <a class="btn" href=#>Belum punya akun ? Daftar Disini</a>
            </div>
          </div>
          </div>
          </div>
        </form>
      </div> -->
      <!-- /.login-box-body -->
      
      <?php
        echo show_err_msg($this->session->flashdata('error_msg'));
      ?>
    <!-- </div> -->
    

    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
