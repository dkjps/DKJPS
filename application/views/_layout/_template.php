<!DOCTYPE html>
<html>
  <head>
    <title>TerasAsuh</title>
    <!-- meta -->
    <?php echo @$_meta; ?>

    <!-- css -->
    <?php echo @$_css; ?>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>    

    <style>
      .DTFC_LeftBodyLiner{overflow-y:unset !important}
      .DTFC_RightBodyLiner{overflow-y:unset !important}
    </style>
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- header -->
      <?php echo @$_header; ?> <!-- nav -->

      <!-- sidebar -->
      <?php echo @$_sidebar; ?>

      <!-- content -->
      <?php echo @$_content; ?> <!-- headerContent --><!-- mainContent -->

      <!-- footer -->
      <?php echo @$_footer; ?>

      <div class="control-sidebar-bg"></div>
    </div>

    <!-- js -->
    <?php echo @$_js; ?>
  </body>
</html>
