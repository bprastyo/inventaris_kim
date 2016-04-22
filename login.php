<!DOCTYPE html>
<html>
<head>
<title>aplikasi Inventaris</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./dist/css/bootstrap.min.css">
<link href="./dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<link href="./dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./dist/js/jquery.min.js"></script>
</head>
<body>
  <div class="jumbotron">
    <center><h2><b>SISTEM PERSEDIAAN SPAREPART AC</b></h2></center>
  </div>
  <center><small></small></center>
          <div class="form-box" id="login-box">
              <div class="header">Form Login</div>
            <form action="proses.php?login=masuk" method="post">
                  <div class="body bg-gray">
                      <div class="form-group">
                          <input type="text" name="username" class="form-control" placeholder="User ID"/>
                      </div>
                      <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Password"/>
                      </div>
                  </div>
                  <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">Masuk</button>
                  </div>
              </form>
              <div class="jumbotron">
                <center><h4>&copy; PT AC - 2016</h4></center>
              </div>
          </div>
</body>
</html>
