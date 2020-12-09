<?php
  $warna = array('danger', 'warning', 'primary', 'success');

  foreach ($pelatihan as $p) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $p->pegawai; ?></td>
      <td><?php echo $p->telp; ?></td>
      <td><?php echo $p->kota; ?></td>
      <td><?php echo $p->kelamin; ?></td>
      <td class="text-center">
        <span class="btn btn-<?=$warna[$statusPelatihan]?>">
        <?php echo $p->posisi; ?>
        </span>
      </td>
      <td class="text-center" style="min-width:230px;">
        <a class="btn btn-success" href="<?php echo base_url('Pelatihan/detailPelatihan'); ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
        <button class="btn btn-primary update-dataPegawai" data-id="<?php echo $p->id; ?>"><i class="glyphicon glyphicon-edit"></i></button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $p->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
