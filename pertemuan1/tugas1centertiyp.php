<?php
  $fruits = [
    ["id" => 1,"name" => "Apel", "color" => "Merah", "stock" => 15, "price" => 39000, "description" => "Buah manis berkulit merah cerah, renyah, kaya serat dan vitamin C. Cocok untuk camilan sehat atau berbagai olahan makanan."],
    ["id" => 2,"name" => "Pir", "color" => "Kuning Keemasan", "stock" => 9, "price" => 16000, "description" => "Buah dengan cita rasa yang khas, dengan rasa manis dan cocok untuk pencuci mulut."],
    ["id" => 3,"name" => "Anggur", "color" => "Biru", "stock" => 30, "price" => 70000, "description" => "Buah yang lezat ini tidak hanya menyegarkan, tetapi juga penuh dengan antioksidan, vitamin, dan nutrisi penting."],
    ["id" => 4,"name" => "Jambu Biji", "color" => "Hijau", "stock" => 22, "price" => 28000, "description" => "Buah tropis yang sangat menyegarkan dan cocok untuk dibuat salad khas indonesia."],
    ["id" => 5,"name" => "Mangga", "color" => "Kuning", "stock" => 36, "price" => 26000, "description" => "Buah yang cocok untuk dibuat hidangan apapun, bisa dibuat untuk dengan banyak olahan, seperti manggo sticky rice dengan cita rasa yang khas"],
   
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>
    th, td {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-bordered table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($fruits as $fruit) {
        ?>
            <tr>
                <td><?= $fruit["id"] ?></td>
                <td><?= $fruit["name"] ?></td>
                <td><?= $fruit["color"] ?></td>
                <td><?= $fruit["stock"] ?></td>
                <td>Rp <?= number_format($fruit["price"], 0, ",", ".") ?></td>
                <td><?= $fruit["description"] ?></td>
            </tr>
        
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
