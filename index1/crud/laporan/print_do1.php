<?php
require_once"../conn.php";
$kd = $_POST['iddo'];
 $pdo=$saripdo->prepare("select*from tb_do where Nomor_DO='$kd' ");
 $pdo->execute();
 $keluar=$pdo->fetch();
 $no = $keluar['Nomor_DO'];
 $tgl = $keluar['Tanggal_DO'];
 $noper = $keluar['Nomor_permintaan'];
 $kdbarang = $keluar['Kode_barang'];
 $nokel = $keluar['Nomor_keluar'];
 $juml = $keluar['Jumlah'];
 $sat = $keluar['Satuan'];
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Inventaris | PT KIM</title>
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../../bootstrap/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="../../bootstrap/css/dewe.css">
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
 <div class="container">
      <form class="" method="post" action="crud/laporan/print_do1.php" target="_blank">
        <input type="hidden" name="iddo" value="<?php echo $_POST['kdprint'] ?> ">
    <div class="form-group">
     <div class="panel panel-default">
    <div class="panel-heading"><legend><center>PT. KARYA INOVASI MANDIRI REMBANG<center></legend>
    <h6><center>Alamat : Desa : Lasem Rt : 00 Rw : 00 Kec.Lasem Kab.Rembang</center></h6></div>
    <table class="table">
      <td width="20%">Nomor DO</td><td width="5%"><b>:</b></td><td><?php echo $no; ?></td><tr></tr>
      <td>Tanggal DO</td><td width="5%"><b>:</b><td width="40%"><?php echo $tgl; ?></td><tr></tr>
      <td>Nomor permintaan</td><td width="5%"><b>:</b><td width="40%"><?php echo $noper; ?></td><tr></tr>
      <td>Kode barang</td><td width="5%"><b>:</b><td width="40%"><?php echo $kdbarang; ?></td><tr></tr>
      <td>Nomor keluar</td width="5%"><td><b>:</b><td width="40%"><?php echo $nokel; ?></td><tr></tr>
      <td>Jumlah</td><td width="5%"><b>:</b><td><?php echo $juml; ?></td><tr></tr>
      <td>Satuan</td><td width="5%"><b>:</b><td><?php echo $sat; ?></td><tr></tr>
      <td colspan="3"></td>
    </table>
<legend><center><h5><?php echo (date('Y-m-d'));?> @ PT. KIM REMBANG</center></h5></legend>
  </div>
    <div class="form-group"></div>
    <div class="control-group">
      <div class="controls">
        </div>
    </div>
    </form>
   </div> <!-- /container -->
 </body>
 </html>

 <script>
 window.load = print_d();
 function print_d(){
 window.print();
 }
 </script>
