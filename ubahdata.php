<?php

    require 'function.php';

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id =$id";
    $mhs = tampildata($query)[0];

    var_dump($mhs["nama"]);

    if(isset($_POST['submit']))
    {

        if (ubahdata($_POST, $id) > 0)
        {
            echo "
                <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href='../datamahasiswa.php';
                </script>
                ";
        }
        else
        {
            echo "
                <script>
                    alert('Data Gagal Diubah!');
                    document.location.href='../datamahasiswa.php'
                </script>
                ";
        }
        


        // if(move_uploaded_file($tmp, $path))
        // {
        //     $query ="INSERT INTO mahasiswa (foto,nama,nim,jurusan,alamat) VALUES ( '$namafile', '$nama', '$nim', '$jurusan', '$alamat')";

        //     mysqli_query($koneksi, $query);

        //     if (mysqli_affected_rows($koneksi) > 0)
        //     {
        //         echo "
        //         <script>
        //             alert('Data Berhasil Ditambahkan!');
        //             document.location.href='datamahasiswa.php';
        //         </script>
        //         ";
        //     }
        //     else
        //     {
        //         echo "
        //         <script>
        //             alert('Data Gagal Ditambahkan!');
        //             document.location.href='datamahasiswa.php'
        //         </script>
        //         ";
        //     }
        // }
    }





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
<!-- <div class="card">
  <div class="card-body">
   <form action="" method="post" enctype ="multipart/form-data" >
  <div class="mb-3">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama lengkap">
  </div>

  <div class="mb-3">
    <label for="inputNIM" class="form-label">NIM</label>
    <input type="text" class="form-control" id="inputNIM" placeholder="Masukkan NIM">
  </div>

  <div class="mb-3">
    <label for="inputJurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="inputJurusan" placeholder="Masukkan jurusan">
  </div>

  <div class="mb-3">
    <label for="inputAlamat" class="form-label">Alamat</label>
    <textarea class="form-control" id="inputAlamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
  </div>

  <div class="mb-3">
    <label for="inputFoto" class="form-label">Upload Foto</label>
    <input type="file" class="form-control" id="inputFoto" accept="image/*">
  </div>

  <button type="submit" name="submit">Ubah</button>
</form>


    </div>
</div>   -->

    <form action="" method="post" enctype ="multipart/form-data" >
        <input type="hidden" name="id">
        <label for="name">Nama:</label>
        <input type="text" name="nama" id="name" required value="<?= $mhs["nama"]?>" /><br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>"/><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]?>"/><br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]?>"/><br>
        <label>Upload Foto</label>
        <input type="file" name="foto" required /><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>