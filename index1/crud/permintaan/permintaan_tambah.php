<?php
require_once"../conn.php"; require_once"../autocode.php";
$kode=$_POST['k'];
$pdoa=$saripdo->prepare("select*from tb_sparepart where Kode_barang='$kode'");
$pdoa->execute();
$permintaan=$pdoa->fetch();
$d=(date('Y-m-d'));
?>
<?php
$number=$saripdo->prepare("select*from tb_sparepart_keluar ORDER BY Nomor_permintaan DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$autono=$nume['Nomor_permintaan'];
?>
<div class="panel">
<table class="table">
<td><center><b>Tanggal Permintaan</b></td><td><center><b>Nama Pemakai</b></td><td><center><b>Jumlah</b></td><td><center><b>Satuan</b></td>
<tr>

      <td>  <div class="form-group">
        <input type="hidden" class="form-control" id="kodebarang" value="<?php echo $kode; ?>">
        <input type="hidden" class="form-control" id="no_permintaan" value="<?php
        if ($autono==null) {
             echo autonumber('PRTM00', 4, 2);
           }else {
             echo autonumber($autono, 4, 2);
           }
        ?>">
          <input type="date" class="form-control" id="tanggal" value="<?php echo $d; ?>">
            </div></td>
            <td>  <div class="form-group">
                <input type="text" class="form-control" id="namaku">
                  </div></td>
                  <td>  <div class="form-group">
                      <input type="text" class="form-control" id="jumlah" placeholder="<?php echo "Jumlah Tersedia &nbsp;".$permintaan['Jumlah']; ?>" >
                        </div></td>
                        <td>  <div class="form-group">
                            <input type="text" class="form-control" id="satuan" value="<?php echo $permintaan['Satuan']; ?>">
                              </div></td>
<td>  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="simpan_permintaan()">Tambah</button>
</div></td>
</tr>
</table>
</div>
