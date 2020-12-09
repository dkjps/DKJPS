<?php
  $warna = array('danger', 'warning', 'primary', 'success');
  var_dump($pelatihan);
  $i = 1;
  foreach ($pelatihan as $p) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td><?=$i++?></td>
      <td style="min-width:100px;"><a class="" href="<?php echo base_url("Pelatihan/detailPelatihan/$p->id"); ?>"><?php echo $p->nama; ?></a></td>
      <td style="min-width:230px;"><?php echo $p->deskripsi; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-primary update-dataPegawai" data-id="<?php echo $p->id; ?>"><i class="glyphicon glyphicon-edit"></i></button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $p->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
