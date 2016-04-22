<section class="col-lg-15 connectedSortable">
<div class="col-md-15">
<div class="box">
<div class="box-header">
<h3 class="box-title">Lihat data</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-bordered">
<tr>
<th style="width: 10px">Nis</th>
<th>Nama</th>
<th>tempat</th>
<th>Tanggal</th>
<th>Agama</th>
<th>J_Kelamin</th>
<th>Alamat</th>
<th>foto</th>
<th>Npsn</th>
<th style="width: 40px">Option</th>
</tr>
<?php require_once"../conn.php";
$verliqueri=$verlipdo->prepare("select*from siswa order by nis");
$verliqueri->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($verlitampil=$verliqueri->fetch()){
  $nama=$verlitampil['nama'];
  $tempat=$verlitampil['tempat'];
  $tgl=$verlitampil['tgl'];
  $agama=$verlitampil['agama'];
  $kelamin=$verlitampil['kelamin'];
  $alamat=$verlitampil['alamat'];
  $foto=$verlitampil['foto'];
  $npsn=$verlitampil['npsn'];
  $nis=$verlitampil['nis'];
?>
<tr>
  <td><?php echo $nis;?></td>
  <td><?php echo $nama;?></td>
  <td><?php echo $tempat;?></td>
  <td><?php echo $tgl;?></td>
  <td><?php echo $agama;?></td>
  <td><?php echo $kelamin;?></td>
  <td><?php echo $alamat;?></td>
  <td><?php echo $foto;?></td>
  <td><?php echo $npsn;?></td>
<td>
<a href="data_ubah.php?idubah=<?php echo $verlitampil['nis'];?>"<span class="badge bg-blue">Ubah</span></a>
<a href="./crud/data_hapus.php?idhapus=<?php echo $verlitampil['nis'];?>"<span class="badge bg-red">Hapus</span></td>
</tr>
<?php } ?>
</table>
</div><!-- /.box-body -->
<div class="box-footer clearfix">
<ul class="pagination pagination-sm no-margin pull-right">
<li><a href="#">&laquo;</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
</div>
</div><!-- /.box -->
</div>

</section>
</div><!-- /.row (main row) -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div>
