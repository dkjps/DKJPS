<?php
  $warna = array('danger', 'warning', 'primary', 'success');
  var_dump($pelatihan);
  $i = 1;
  foreach ($pelatihan as $p) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td><?=$i++?></td>
      <td style="min-width:0;"><a class="" href="<?php echo base_url("Pelatihan/detailPelatihan/$p->id"); ?>"><?php echo $p->nama; ?></a></td>
      <td style="min-width:0;"><?php echo $p->deskripsi; ?></td>
      <td class="text-center" style="min-width:120px;">
        <a href="<?=base_url("pelatihan/ubahPelatihan/$p->id")?>" class="btn btn-primary update-dataPegawai" data-id="<?php echo $p->id; ?>"><i class="glyphicon glyphicon-edit"></i></a>
        <button class="btn btn-danger konfirmasiHapus-pegawai" onclick="konfirmasiHapus('<?=base_url("Pelatihan/hapusPelatihan/$p->id")?>')"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>

<script type="text/javascript">
  function konfirmasiHapus(link){
    $('#btnYa').attr('href', link);
    $('#konfirmasiHapus').modal('show');
  }
</script>
