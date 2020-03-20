
<?php 
  require_once('rfc6238.php');
  $secretkey = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $otp = $_POST['otp'];

  if (TokenAuth6238::verify($secretkey, $otp)) {
    if ($username == 'pringgo' && $password == 'pringgo') {
      echo "Username and Code is valid\n";
    } else {
      echo "Username and Code is invalid\n";
      $tanggal=date('M j H:i:s');
      system("echo " . $tanggal . " GAGAL " . $_SERVER['REMOTE_ADDR'] . " >> /var/www/html/log/report") ;
    }
	} else {
    echo "Invalid code\n";
    $tanggal=date('M j H:i:s');
    system("echo " . $tanggal . " GAGAL " . $_SERVER['REMOTE_ADDR'] . " >> /var/www/html/log/report") ;
	}
?>