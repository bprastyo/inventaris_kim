<?php
//Verly HTACCESS
$login="login-akademik.html";
session_start();
session_destroy();
echo "<script>
eval(\"parent.location='login.php'\");
alert ('Anda berhasil Logout');
</script>";
?>
