<?php
  $warna = array('danger', 'warning', 'primary', 'success');
  var_dump($pelatihan);
  $i = 1;
  foreach ($pelatihan as $p) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td><?=$i++?></td>
      <td style="min-width:230px;"><?php echo $p->nama; ?></td>
      <td><?php echo $p->deskripsi; ?></td>
      <td class="text-center" style="min-width:230px;">
        <a class="btn btn-success" href="<?php echo base_url("Pelatihan/detailPelatihan/$p->id"); ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
        <button class="btn btn-primary update-dataPegawai" data-id="<?php echo $p->id; ?>"><i class="glyphicon glyphicon-edit"></i></button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $p->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
