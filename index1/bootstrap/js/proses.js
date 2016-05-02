// JavaScript Document
var xmlhttp;
/* profil */
function user(){
	var url="./crud/user/user.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function user_tam(){
	var url="./crud/user/user_tam.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function user_edit(kdedit){
	var url="./crud/user/user_update.php";
	var post="kdedit="+kdedit;
	var response="aksi";
	ajax(url,post,response);
	}

function users_update(){
	var u=document.getElementById("username_u").value;
	var p=document.getElementById("password_u").value;
	var k=document.getElementById("kategori_u").value;

	var url='crud/user/user_update_simpan.php';
	var post='u='+u+"&p="+p+"&k="+k;
	ajax(url,post,"hasil");
	}

function user_simpan(){
	var u=document.getElementById("username_u").value;
	var p=document.getElementById("password_u").value;
	var k=document.getElementById("kategori_u").value;

	var url='crud/user/user_tambah.php';
	var post='u='+u+"&p="+p+"&k="+k;
	ajax(url,post,"aksi");
	alert("Data Berhasil Disimpan");
	return true;
	}

function user_hapus(kdhapus){
		var konfirmasi=confirm("anda yakin hapus ?");
	if (konfirmasi){
		var url="./crud/user/user_hapus.php";
		var post="kdhapus="+kdhapus;
		var response="aksi";
		ajax(url,post,response);
		alert("anda telah Menghapus");
		return true;
		}
	else{
		alert("Hapus Batal")
		return false;
		}}
/* sperpart */
function sperpart(){
	var url="./crud/sperpart/sperpart.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function sperpartmasuk(){
	var url="./crud/sperpart/sperpart_masuk.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function pengeluaran(){
	var url="./crud/pengeluaran/pengeluaran.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function sperpart_a(){
	var url="./crud/permintaan/permintaan.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function sperpart_tambah_kategori(kdbeli){
		var url="./crud/sperpart/sperpart_tam_kategori.php";
		var post="kdbeli="+kdbeli;
		var response="isia";
		ajax(url,post,response);
		}

function sperpart_tambahan(){
		var k=document.getElementById("kode_barang").value;
		var n=document.getElementById("nama_barang").value;
		var url="./crud/sperpart/sperpart_tam_simpan.php";
		var post='k='+k+"&n="+n;
		ajax(url,post,"isia");
		alert("Data Berhasil Disimpan");
		return true;
		}
		function sperpart_beli(kdbeli){
				var url="./crud/pembelian/pembelian_tambah.php";
				var post="kdbeli="+kdbeli;
				var response="isia";
				ajax(url,post,response);
				}
function printdo1(kdprint){
		var url="./crud/laporan/print_do.php";
		var post="kdprint="+kdprint;
		var response="print";
		ajax(url,post,response);
		}
	function permintaan(){
			var url="./crud/permintaan/permintaan.php?rand="+Math.random();
			var post="";
			ajax(url,post,"isi");
			}
	function print(kdprint){
			//window.open("./crud/laporan/print_do.php","_blank");
			var url="./crud/laporan/print_do.php";
			var post="kdprint="+kdprint;
			var response= "aksi";
			ajax(url,post,response);
			}
	function permintaan_tam(){
					var url="./crud/permintaan/permintaan_tam.php?rand="+Math.random();
					var post="";
					ajax(url,post,"isia");
					}
	function tambah(){
					var url="./crud/permintaan/permintaan_tamb.php?rand="+Math.random();
					var post="";
					ajax(url,post,"dampak");
					}

	function tambah_permintaan(){
		var k=document.getElementById("kodebarang").value;
		var url="./crud/permintaan/permintaan_tambah.php";
		var post='k='+k;
		ajax(url,post,"aksi");
		}

		function simpan_permintaan(){
			var k=document.getElementById("kodebarang").value;
			var n=document.getElementById("no_permintaan").value;
			var t=document.getElementById("tanggal").value;
			var q=document.getElementById("namaku").value;
			var j=document.getElementById("jumlah").value;
			var s=document.getElementById("satuan").value;
			var url="./crud/permintaan/permintaan_simpan.php";
			var post='k='+k+"&n="+n+"&t="+t+"&q="+q+"&j="+j+"&s="+s;
			ajax(url,post,"isi");
			alert("Data Berhasil Disimpan");
			return true;
			}

/* pembelian */
function pembelian_kel(){
	var url="./crud/pembelian/pembelian_proses.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function pembelian_keluar(kdbeli){
	var url='crud/pembelian/pembelian_proses_masuk.php';
	var post="kdbeli="+kdbeli;
	var response="aksi";
	ajax(url,post,response);
	alert("Data Berhasil Di Proses");
	return true;
	}
function pembelian(){
	var url="./crud/pembelian/pembelian.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function pembelian_s(){
	var n=document.getElementById("no_pembelian").value;
	var a=document.getElementById("namabarang").value;
	var q=document.getElementById("jumlahbarang").value;
	var t=document.getElementById("tanggalbeli").value;
	var k=document.getElementById("kode_barang").value;
	var j=document.getElementById("jumlah").value;
	var s=document.getElementById("satuan").value;
	var url='crud/pembelian/pembelian_simpan.php';
  //var url='';
	var post='n='+n+"&a="+a+"&q="+q+"&t="+t+"&k="+k+"&j="+j+"&s="+s;
	var response="isia";
	ajax(url,post,response);
	alert("Data Berhasil Disimpan");
	//header('location:"sperpart"');
	return true;
	}
function proses_permintaan(kdproses){
	var url='crud/permintaan/permintaan_jadi.php';
	var post="kdproses="+kdproses;
	var response="aksi";
	ajax(url,post,response);
	alert("Data Berhasil Disimpan");
	return true;
	}
// delevery older

function laporan_do(){
	var url="./crud/do/do.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
	function tam_do(){
		var url="./crud/do/do_tam.php?rand="+Math.random();
		var post="";
		ajax(url,post,"isi");
		}
	function tambah_do(){
		var k=document.getElementById("kodekeluar").value;
		var url="./crud/do/do_tambah.php";
		var post='k='+k;
		ajax(url,post,"aksi");
		}
	function do_jadi(){
		 var nodo=document.getElementById("nodo").value;
		 var tgl=document.getElementById("tanggaldo").value;
		 var noper=document.getElementById("noper").value;
		 var ndb=document.getElementById("kode_barang").value;
		 var nokel=document.getElementById("nokel").value;
		 var jml=document.getElementById("jumlah").value;
		 var sat=document.getElementById("satuan").value;
		var url='crud/do/do_simpan.php';
		var post='nodo='+nodo+"&tgl="+tgl+"&noper="+noper+"&ndb="+ndb+"&nokel="+nokel+"&jml="+jml+"&sat="+sat;
		ajax(url,post,"isi");
		alert("Data Berhasil Disimpan");
		return true;
		}
// laporan semua
function laporan_keluar(){
	var url="./crud/laporan/barang_keluar.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function laporan_masuk(){
	var url="./crud/laporan/barang_masuk.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}


/* proses js*/
function out_response(response){

	if(response=="tampil"){
		document.getElementById("tampil").innerHTML=xmlhttp.responseText;
		}
		if(response=="dampak"){
			document.getElementById("dampak").innerHTML=xmlhttp.responseText;
			}
	if(response=="isi"){
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}
	if(response=="hasil"){
		document.getElementById("hasil").innerHTML=xmlhttp.responseText;
		}
	if(response=="aksi"){
		document.getElementById("aksi").innerHTML=xmlhttp.responseText;
			}
			if(response=="print"){
				document.getElementById("print").innerHTML=xmlhttp.responseText;
					}
					if(response=="isia"){
						document.getElementById("isia").innerHTML=xmlhttp.responseText;
							}
}


function ajax(url,post,response){
	xmlhttp=GetXmlHttpObject();
	xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4){
		if(xmlhttp.status==200){
		out_response(response);
			}else{
				ajax_fail();
				}
	}
	}
	xmlhttp.open("POST",url,true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(post);
  }
function ajax_fail(){
	slert('maaf ada gangguan penerimaan data, silahkan coba lagi atau refresh web browser anda');
	return false;
	}
function GetXmlHttpObject(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
		}
	if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
		}else{
			alert('browser anda tidak mendukung ajax');}
			return false;
	}
