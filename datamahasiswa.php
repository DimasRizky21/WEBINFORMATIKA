<?php

    $koneksi = mysqli_connect("localhost","root","root","informatik");

    if(!$koneksi)
    {
        die('koneksi Gagal'.mysqli_connect_error());
    }

    $result  = mysqli_query($koneksi,"SELECT * FROM mahasiswa");

    

    /// ambil data di lemari kemudian kasih ke aku caranya gini

    // mysqli_fetch_row() -> array number
    // mysqli_fetch_assoc()
    // mysqli_fetch_array()
    // mysqli_fetch_object()

    $mhs = mysqli_fetch_row($result);

    var_dump($mhs[1]);
    

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

    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
    </table>
</body>
</html>