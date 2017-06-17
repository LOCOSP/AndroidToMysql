<?php
$db_user = 'root';
$db_password = 'root';
$db = 'employee101';
$db_host = 'localhost';
$db_port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $db_host,
   $db_user,
   $db_password,
   $db,
   $db_port
);
if ($success) {
  echo "Connection success - ";
}
else {
  echo "Connection not success - ";
}
?>
