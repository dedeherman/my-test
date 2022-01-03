<html>
<head>
	<title>Validasi Password</title>
</head>
<body>

<?php
  $msg="";
  if(isset($_POST['password'])) {
    $password = $_POST['password'];
    
    if(!preg_match("/(?!.*(.)\1)(?=.*\d)(?=.*(\W|_))(?=.*[a-z])(?=.*[A-Z])[^\d_].{8,32}[^\W_]/", $password)){
      $msg = "Kata sandi minimal 8 karakter, Kata sandi maksimal 32 karakter, Karakter awal tidak boleh angka, Harus memiliki 2 atau lebih simbol, Harus memiliki angka, Harus memiliki huruf kapital dan huruf kecil, Tidak boleh memiliki 3 angka berurutan";
    } else {
      $msg = "Kata sandi valid.";
    }
  }
?>

<h3>Validasi Password</h3>
  <form method="POST">
    <input type="password" name="password" required />
    <input type="submit" value="Check" /><br />
    <span><?php echo $msg?></span>
  </form>

</body>
</html>