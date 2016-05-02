<?php require_once"../conn.php";
require_once"../autocode.php";
$kdbeli=$_POST['kdbeli'];
$pdo=$saripdo->prepare("select*from tb_sparepart where Kode_barang='$kdbeli' ");
$pdo->execute();
$beli=$pdo->fetch();
?>
<?php
$number=$saripdo->prepare("select SUM(Nomor_pembelian) FROM tb_pembelian");
$number=$saripdo->prepare("select*from tb_pembelian ORDER BY Nomor_pembelian DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$auto=$nume['Nomor_pembelian'];
$au=$auto+1;
$d=(date('Y-m-d'));
?>

<link rel="stylesheet" href="bootstrap/css/dewe.css">
<div class="container-flue">
     <form class="contact-us form-horizontal" method="post">
   <legend>PEMBELIAN BARANG</legend>
   <div class="form-group">
     <input type="hidden" class="form-control" id="no_pembelian" placeholder="Nomor Pembelian" value="<?php
      if ($auto==null) {
           echo autonumber('BELI00', 4, 2);
         }else {
           echo autonumber($auto, 4, 2);
         }
     ?>">
   </div>
   <div class="form-group">
     <input type="hidden" class="form-control" id="namabarang" placeholder="Nomor"  value="<?php echo $beli['Nama_barang']; ?>">
   </div>
   <div class="form-group">
     <input type="hidden" class="form-control" id="jumlahbarang" placeholder="Nomor"  value="<?php echo $beli['Jumlah']; ?>">
   </div>
   <div class="form-group">
     <input type="date" class="form-control" id="tanggalbeli" value="<?php echo $d; ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="kode_barang" placeholder="Kode Barang" value="<?php echo $beli['Kode_barang']; ?>">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" value="<?php echo $beli['Jumlah']; ?>" >
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="satuan" placeholder="Satuan" value="<?php echo $beli['Satuan'];?>">
   </div>


   <div class="form-group"></div>
   <div class="control-group">
     <div class="controls">
     <button type="button" class="btn btn-primary" onclick="pembelian_s();">Beli</button>
     <button type="reset" class="btn" onclick="sperpart()">Cancel</button>
       </div>
   </div>
   </form>
  </div> <!-- /container -->

<div id="aksi">
</div>
