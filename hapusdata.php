<?php

require 'function.php';

    $id = $_GET["id"];

    if (hapusdata($id) > 0)
    {
        echo "
                <script>
                    alert('Data Berhasil Dihapus!');
                    document.location.href='../datamahasiswa.php';
                </script>
                ";
    }
    else
    {
        echo "
                <script>
                    alert('Data gagal Dihapus!');
                    document.location.href='../datamahasiswa.php';
                </script>
                ";
    }

?>