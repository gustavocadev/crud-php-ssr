<?php
// edit values of the student in the databse
require("db/conn.php");
$conn = connect_mysqlFunc();

// query to get the values
$id = $_GET['id'];

$sql1 = "SELECT * FROM estudiantes WHERE id = $id";
$query1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="update.php" method="POST">
    <section class="p-3">
      <label for="" class="block">Nombre</label>
      <input type="text" class="border" name="name" value="<?php echo $row["name"] ?>">

      <label for="" class="block">Apellido</label>
      <input type="text" class="border" name="lastName" value="<?php echo $row['lastName'] ?>">

      <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
      <button class="blue rounded p-4 bg-blue-600 text-white" type="submit">
        Actualizar
      </button>
    </section>

  </form>
</body>

</html>