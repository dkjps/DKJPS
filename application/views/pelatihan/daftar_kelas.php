<?php
  $warna = array('danger', 'warning', 'primary', 'success');
  $caption = array('Belum Buka', 'Daftar', 'Jalan', 'Selesai');
  $i = 1;
  foreach ($detail as $d) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td><?=$i++?></td>
      <td><?php echo $d->nama_kelas; ?></td>
      <td><?php echo $d->nama_pelatihan; ?></td>
      <td><?php echo $d->jumlah_peserta; ?></td>
      <td><?php echo ($d->jumlah_pemateri?$d->jumlah_pemateri:0); ?></td>
      <td><?php echo $d->tgl_buka; ?></td>
      <td><?php echo $d->tgl_selesai; ?></td>
      <td class="text-center">
        <span class="btn btn-<?=$warna[$d->status_kelas]?>">
        <?php echo $caption[$d->status_kelas]; ?>
        </span>
      </td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $d->id_kelas; ?>"><i class="glyphicon glyphicon-share-alt"></i></button>
        <button class="btn btn-primary update-dataPegawai" data-id="<?php echo $d->id_kelas; ?>"><i class="glyphicon glyphicon-edit"></i></button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $d->id_kelas; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
