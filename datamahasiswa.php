<?php

    require 'function.php';

    $query = "SELECT * FROM mahasiswa";
    $rows = tampildata($query);

 

    

    /// ambil data di lemari kemudian kasih ke aku caranya gini

    // mysqli_fetch_row() -> array number
    // mysqli_fetch_assoc() -> associative
    // mysqli_fetch_array() -> array number / associatif
    // mysqli_fetch_object()

    // while($mhs = mysqli_fetch_assoc($result))
    // {
    //     var_dump($mhs["nama"]);
    // }
    

   
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav>
        <ul style="list-style-type: none; text-align: center; padding: 0%;">
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
                <a href="index.php">Home</a>
            </li>
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
                <a href="about.html">About</a>
            </li>   
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="service.html">Services</a></li>
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="contact.html">Contact</a></li>
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="datamahasiswa.php">Data</a></li>                                                    
        </ul>
    </nav>
    <h1>Data Mahasiswa</h1>
    <a href="tambahdata.php">
        <button style="background-color: green; cursor:pointer; margin-bottom:2px;">
            Tambah Data
        </button></a>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <?php 
        $i = 1;
        foreach($rows as $mhs) { ?>
        <tr>
            <td><?= $i ?> </td>
            <td><img src="images/mhs/<?= $mhs["foto"] ?>" alt="<?= $mhs["foto"] ?>" width="170px" /> </td>
            <td><?= $mhs["nama"]; ?> </td>
            <td><?= $mhs["nim"]; ?> </td>
            <td><?= $mhs["jurusan"]; ?> </td>
            <td><?= $mhs["alamat"]; ?> </td>
            <td>
                <a href="hapusdata.php/?id=<?php $mhs["id"] ?>"> Hapus</a>
                <a href="ubahdata.php/?id=<?= $mhs["id"] ?>"> Edit</a>
            </td>
        </tr>
        <?php $i++; } ?>
    </table>
</body>
</html>