  <?php
  $nodo=$_POST['nodo'];
  $tgl=$_POST['tgl'];
  $noper=$_POST['noper'];
  $ndb=$_POST['ndb'];
  $nokel=$_POST['nokel'];
  $jml=$_POST['jml'];
  $sat=$_POST['sat'];

  echo ;

  require_once"../conn.php";
  $sql_simpan=$saripdo->prepare("insert into  tb_do(Nomor_DO,Tanggal_DO,Nomor_permintaan,Kode_barang,Nomor_keluar,Jumlah,Satuan)
  values ('$nodo','$tgl','$noper','$ndb','$nokel','$jml','$sat')");
  $sql_simpan->execute();

  ?>
