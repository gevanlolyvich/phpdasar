<?php
    session_start();
    // cek apakah ada session login
    if ( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET["id"];
    var_dump($id);

    if ( hapus($id) > 0 ) {
        echo "
                <script>
                    alert('Data Berhasil dihapus');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>