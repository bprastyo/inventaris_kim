<script type="text/javascript" src="../../bootstrap/js/jquery.js"></script>
   <script type="text/javascript" src="../../bootstrap/js/jquery.validate.min.js"></script>
   <title>Multiple Insert Data Dengan jQuery</title>
   	<style>
   	body{
   	background-color:#666666;
   	color:#FFFFFF;
   	font-size:12px;
   	font-family:Tahoma;
   	}
   	table{
   	border:1px solid #FFFFFF;
   	padding:0px;
   	font-size:12px
   	}
   	td{
   	border:1px solid #FFFFFF;
   	padding:5px;
   	}
   	input{
   	background-color:#FF9900;
   	border:1px solid #000000;
   	padding:5px;
   	cursor:pointer;
   	}
   	</style>
   	<script type="text/javascript">
   	$(document).ready(function() {
               var nomor = 0;
   			var status="";
               $(".tambah").click(function(){
               nomor ++;
                   $('#konten').append(
                                '<tr class="baris">'
                            + '<input name="nomor[]" value="'+ nomor +'" type="hidden"></td>'
                            + '<td><input name="kode_barang_'+ nomor +'" type="text"></td>'
                            + '<td><input name="nama_barang_'+ nomor +'" type="text"></td>'
                            + '<td><input name="harga_barang_'+ nomor +'" type="text"></td>'
                            + '<td><input type="button" id="hapus" value="Hapus"></td></tr>'
                       );
                   });

                   $("#hapus").live('click', function () {
   					$(this).parents(".baris").remove();
               	});

   				$("#myfrm").validate({
   				debug: false,
   				rules: {
   				},
   				messages: {
   				},
   				submitHandler: function(form) {
   					$.post('simpan.php', $("#myfrm").serialize(), function(data) {
   					$('#tabel').slideUp();
   					$('#hasil').html(data);
   					status = "";
   					});
   				}
   			});
           });

   	function tampilTabel()
   	{
   		if(status=="")
   		{
   			$('#tabel').slideDown();
   			status="1";
   		}
   		else
   		{
   			$('#tabel').slideUp();
   			status="";
   		}
   	}
   	</script>
     	<form action="" method="post" id="myfrm"> <input type="submit" value="Simpan Data">
   	<a class="tampilkan" onclick="tampilTabel();" style="cursor:pointer; padding:6px; border:1px solid #000; background-color:#FF9900; color:#000000;">Tampilkan</a>
   	<a class="tambah" style="cursor:pointer; padding:6px; border:1px solid #000; background-color:#FF9900; color:#000000;">Tambah Data</a>
   	<br><br>
   	<div id="tabel" style="display:none;">
   	<table border="0" width="100%" cellpadding="0" cellspacing="0">
   	<tr>
   	<td>Kode Barang</td><td>Nama Barang</td><td>Harga Barang</td><td>Hapus</td>
   	</tr>
   	<tbody id="konten"></tbody>
   	</table>
   	</div>
       </form>

   	<div id="hasil"></div>
