<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">User Tambah</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Form User Tambah</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="user()" >x</button>
  <table class="table">
    <tr><td><center><b>USERNAME</b></td><td><center><b>PASSWORD</b></td><td><center><b>KATEGORI</b></td><td><center><b>AKSI</b></td></center>
    </tr>
    <tr>
    <td><input type="text" class="form-control" id="username_u"></td>
    <td><input type="text" class="form-control" id="password_u"></td>
    <td><select class="form-control" id="kategori_u"><option>admin</option><option>pimpinan</option></select></td>
    <td style="width:150px;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="user_simpan();">Tambah</button>
</div></td>
</tr>

  </table>
</div>
<div id="aksi">
</div>
