<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;

        // ambil data dari tiap element dalam form
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        
        //upload gambar
        $gambar = upload();
        if ( !$gambar ) {
            return false;
        }

        // query insert data
        $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar)
                    VALUES
                    ('$nama', '$nrp', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        // mengambil data
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        // cek apakah tidak ada gambar yang diupload
        if ( $error === 4 ) {
            echo "
                <script>
                    alert('pilih gambar terdahulu');
                </script>
            ";
            return false;
        }

        //cek apakah yang diupload adalah gambar
        $ekstesiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode(".", $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if ( !in_array($ekstensiGambar, $ekstesiGambarValid) ) {
            echo "
                <script>
                    alert('yang anda upload bukan gambar');
                </script>
            ";
            return false;
        }

        // cek ukuran gambar terlalu besar
        if ( $ukuranFile > 1000000 ) {
            echo "
                <script>
                    alert('ukuran gambar terlalu besar');
                </script>
            ";
            return false;
        }

        // lolos pengecekan gambar, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= ".";
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;

    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        // ambil data dari tiap element dalam form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = $data["gambarLama"];

        // cek apakah user pilih gambar baru atau tidak
        if ( $_FILES["gambar"]['error'] === 4 ) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        // query update data
        $query = "UPDATE mahasiswa SET
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                WHERE id = $id
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa
                    WHERE
                    nama LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
                ";
        return query($query);
    }
?>