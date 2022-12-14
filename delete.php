<?php
// delete student from the database
require("db/conn.php");
$conn = connect_mysqlFunc();

$id = $_GET['id'];

$sql = "DELETE FROM estudiantes WHERE id = $id";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location: index.php");
} else {
  echo "Error al eliminar los datos en la base de datos";
}
