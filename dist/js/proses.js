// JavaScript Document
var xmlhttp;
/* profil */
function profil(){
	var url="./crud/profil/profil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
/* siswa */
function siswa(){
	var url="./crud/siswa/siswa_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function siswa_tambah(){
	var url="./crud/siswa/siswa_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
}
function siswa_edit(){
	var url="./crud/siswa/siswa_edit.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
/*user*/
}
function user_tampil(){
	var url="./crud/user/user_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
}
function user_crud(){
	var url="./crud/user/user_crud.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampil");
}
/* menu header */
function menu2(){
	var url="./news/news.html?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function footer(){
	var url="footer.html?rand="+Math.random();
	var post="";
	ajax(url,post,"footer");
	}

/* proses js*/
function out_response(response){

	if(response=="tampil"){
		document.getElementById("tampil").innerHTML=xmlhttp.responseText;
		}
	if(response=="isi"){
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}
	if(response=="footer"){
		document.getElementById("footer").innerHTML=xmlhttp.responseText;
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
