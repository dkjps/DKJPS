<?php
  $warna = array('danger', 'warning', 'primary', 'success');
  $caption = array('Belum Buka', 'Daftar', 'Jalan', 'Selesai');
  $i = 1;
  foreach ($detail as $d) {
    $statusPelatihan = rand(0,3);
    ?>
    <tr>
      <td><?=$i++?></td>
      <td><a href="<?=base_url("Kelas/detailKelas/$d->id_kelas")?>"><?php echo $d->nama_kelas; ?></a></td>
      <td><?php echo $d->nama_pelatihan; ?></td>
      <td><?php echo ($d->jumlah_peserta?$d->jumlah_peserta:0); ?></td>
      <td><?php echo ($d->jumlah_pemateri?$d->jumlah_pemateri:0); ?></td>
      <td><?php echo $d->tgl_buka; ?></td>
      <td><?php echo $d->tgl_selesai; ?></td>
      <td class="text-center">
        <span class="btn btn-<?=$warna[$d->status_kelas]?>">
        <?php echo $caption[$d->status_kelas]; ?>
        </span>
      </td>
      <td class="text-center" style="min-width:150px;">
        <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $d->id_kelas; ?>"><i class="glyphicon glyphicon-share-alt"></i></button>
        <a href="<?=base_url("Kelas/ubahKelas/$d->id_kelas")?>" class="btn btn-primary update-data" ><i class="glyphicon glyphicon-edit"></i></a>
        <button class="btn btn-danger" onclick="konfirmasiHapus('<?=base_url("Kelas/hapusKelas/$d->id_kelas")?>')"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>

<?php show_my_confirm('konfirmasiHapus', 'hapus-data', 'Hapus Data Ini?'); ?>
<!-- <script type="text/javascript">
  function konfirmasiHapus(link){
    $('#btnYa').attr('href', link);
    $('#konfirmasiHapus').modal('show');
  }
</script> -->
