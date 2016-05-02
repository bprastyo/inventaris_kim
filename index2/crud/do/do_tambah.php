<?php require_once"../conn.php";
require_once"../autocode.php";
$kdkeluar=$_POST['k'];
$pdo=$saripdo->prepare("select*from tb_sparepart_keluar where Nomor_keluar='$kdkeluar' ");
$pdo->execute();
$keluar=$pdo->fetch();
?>
<?php
$number=$saripdo->prepare("select*from tb_do ORDER BY Nomor_DO DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$auto=$nume['Nomor_DO'];
if ($auto==null) {
     $do=autonumber('DO00', 2, 2);
   }else {
     $do=autonumber($auto, 2, 2);
   }
$d=(date('Y-m-d'));
?>

<link rel="stylesheet" href="bootstrap/css/dewe.css">
<div class="container-fluid">
     <form class="contact-us form-horizontal" method="post">
   <legend>DO</legend>
   <div class="form-group">
     <label>Nomor</label>
     <input type="text" class="form-control" id="nodo" placeholder="Nomor DO"  value="<?php echo $do; ?>">
   </div>
   <div class="form-group">
     <input type="date" class="form-control" id="tanggaldo" value="<?php echo $d; ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="noper" placeholder="Nomor Permintaan" value="<?php echo $keluar['Nomor_permintaan']; ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="kode_barang" placeholder="Kode Barang" value="<?php echo $keluar['Kode_barang']; ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="nokel" placeholder="Kode Barang" value="<?php echo $keluar['Nomor_keluar']; ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" value="<?php echo $keluar['Jumlah']; ?>" >
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="satuan" placeholder="Satuan" value="<?php echo $keluar['Satuan'];?>">
   </div>
   <div class="form-group"></div>
   <div class="control-group">
     <div class="controls">
     <button type="button" class="btn btn-primary" onclick="do_jadi();">Masukan DO</button>
     <button type="reset" class="btn">Cancel</button>
       </div>
   </div>
   </form>
  </div> <!-- /container -->

<div id="aksi">
</div>
