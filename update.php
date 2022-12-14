<?php
require("db/conn.php");
$conn = connect_mysqlFunc();

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$id = $_POST['id'];
print($id);
print($name);
print($lastName);
// update student in the database
$sql = "UPDATE estudiantes SET name = '$name', lastName = '$lastName' WHERE id = $id";
$query = mysqli_query($conn, $sql);
if ($query) {
  header("Location: index.php");
} else {
  echo "Error al actualizar los datos en la base de datos";
}
