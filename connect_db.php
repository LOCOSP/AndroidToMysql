<?php
$db_user = 'root';
$db_password = 'root';
$db = 'employee101';
$db_host = 'localhost';
$db_port = 8889;


$link = mysqli_connect($db_host, $db_user, $db_password, $db, $db_port);
if ($link) {
  echo "<pre>Connection success :-)</pre>";
}
else {
  echo "<pre>Connection not success</pre>";
}
