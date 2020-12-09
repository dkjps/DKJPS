<?php
  $warna = array('danger', 'warning', 'primary', 'success');

  foreach ($dataPegawai as $pegawai) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $pegawai->pegawai; ?></td>
      <td><?php echo $pegawai->telp; ?></td>
      <td><?php echo $pegawai->kota; ?></td>
      <td><?php echo $pegawai->kelamin; ?></td>
      <td class="text-center">
        <span class="btn btn-<?=$warna[$statusPelatihan]?>">
        <?php echo $pegawai->posisi; ?>
        </span>
      </td>
      <td class="text-center" style="min-width:230px;">
        <a class="btn btn-success" href="<?php echo base_url('Pelatihan/detailPelatihan'); ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
        <button class="btn btn-primary update-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-edit"></i></button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $pegawai->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>