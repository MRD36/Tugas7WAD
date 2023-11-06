//file insert.php
<?php
$conn = mysqli_connect("localhost", "root", "", "nintendo_db");
//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$nama_barang = $_POST["nama_barang"];
$harga_barang = $_POST["harga_barang"];
$stok_barang = $_POST["stok_barang"];
$sql = "INSERT INTO barang (nama_barang, harga_barang, stok_barang) VALUES ('$nama_barang', $harga_barang, $stok_barang)";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil disimpan'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data gagal disimpan: " . mysqli_error($conn) . "'); window.location.href='index.php';</script>";
}
mysqli_close($conn);
?>
