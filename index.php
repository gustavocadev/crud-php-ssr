<?php
require("db/conn.php");

$conn = connect_mysqlFunc();

$sql = "SELECT * FROM estudiantes";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <form action="insert.php" method="POST">
    <section class="p-3">
      <label for="" class="block">Nombre</label>
      <input type="text" class="border" name="name">

      <label for="" class="block">Apellido</label>
      <input type="text" class="border" name="lastName">

      <button class="blue rounded p-4 bg-blue-600 text-white">
        Agregar
      </button>
    </section>

  </form>

  <main>
    <table class="table-auto">
      <thead>
        <tr>
          <th class="border px-4 py-2">Nombre</th>
          <th class="border px-4 py-2">Apellido</th>
          <th class="border px-4 py-2">Actions</th>

        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td class="border px-4 py-2"><?php echo $row['name'] ?></td>
            <td class="border px-4 py-2"><?php echo $row['lastName'] ?></td>
            <td class="border px-4 py-2">
              <a href="edit.php?id=<?php echo $row['id'] ?>" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
              <a href="delete.php?id=<?php echo $row['id'] ?>" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </main>
</body>

</html>