<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "history_n_memes");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

        // query insert data
    $query = "INSERT INTO fegelein
    VALUES
    ('0', '$judul', '$deskripsi', '$gambar')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('Pilih Gambar!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 5000000 ) {
        echo "<script>
                alert('Ukuran Gambar Terlalu Besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM fegelein WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE fegelein SET
                judul = '$judul',
                deskripsi = '$deskripsi',
                gambar = '$gambar'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM fegelein
                WHERE
                judul LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%'
                ";
    return query($query);
}


function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $no_hp = mysqli_real_escape_string($conn, $data["no_hp"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

     // Validasi panjang username
    if (strlen($username) > 20) {
        echo "<script>
                alert('Username tidak boleh lebih dari 20 karakter!');
            </script>";
        return false;
    }

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username Sudah Digunakan!');
            </script>";
        return false;
    }

     // cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Email Sudah Digunakan!');
            </script>";
        return false;
    }

    // cek password kosong
    if( empty($password) || empty($password2) ) {
        echo "<script>
                alert('Password Tidak Boleh Kosong!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai!');
            </script>";
        return false;
    }

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// return mysqli_affected_rows($conn);
$query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', 'user')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);


}

?>