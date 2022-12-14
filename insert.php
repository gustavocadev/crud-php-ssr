<?php

require("db/conn.php");
// insert student in the database
$name = $_POST['name'];
$lastName = $_POST['lastName'];

$conn = connect_mysqlFunc();

$sql = "INSERT INTO estudiantes (name, lastName) VALUES ('$name', '$lastName')";
$query = mysqli_query($conn, $sql);



if ($query) {
  header("Location: index.php");
} else {
  echo "Error al insertar los datos en la base de datos";
}
