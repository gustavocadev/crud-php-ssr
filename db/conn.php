<?php
function connect_mysqlFunc()
{
  $host = "localhost";
  $user = "root";
  $password = "";

  $dababase = "phpdb";

  $conn = mysqli_connect($host, $user, $password, $dababase);

  mysqli_select_db($conn, $dababase);
  return $conn;
}
