//function untuk koneksi ke database
function connect_db() {
    //tentukan variabel untuk koneksi
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nintendo_db";
    //buat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    //kembalikan nilai koneksi
    return $conn;
}
