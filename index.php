<?php 

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

form {
    
    margin:100px 90px 75px 400px;
    text-align:right;
    width: 350px;
    height: 300px;
    background-color:#ADD8E6;
    padding: 40px;
 }

    </style>
</head>
<body>
    <h2 style="text-align:center; margin-top:20px;">Data Mahasiswa </h2>
<table border="1"  class="table mt-5" style="width:100%;">
        <tr class="table-primary">
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>

        <?php  while( $row = $result->fetch_assoc())  : ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['nim'] ?></td>
            <td><?php echo $row['jurusan'] ?></td>
            <td><?php echo $row['semester'] ?></td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>

        <?php  endwhile;  ?>
    </table>
     
    <br>
    <form action="insert.php" method="POST" >
        <h4 style="text-align:center;">Mahasiswa</h4>
        Nama    : <input type="text" name="nama" required><br>
        NIM     : <input type="text" name="nim" required><br>
        Jurusan : <input type="text" name="jurusan" required><br>
        Semester: <input type="number" name="semester" required><br>
        <input type="submit" value="Tambah" class="btn btn-light" style="margin:10px;>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>