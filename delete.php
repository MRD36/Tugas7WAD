//file delete.php
<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "nintendo_db");
//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//ambil id barang dari url
$id_barang = $_GET["id"];
//query untuk menghapus data
$sql = "DELETE FROM barang WHERE id_barang = $id_barang";
//cek hasil query
if (mysqli_query($conn, $sql)) {
    //tampilkan pesan sukses
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php';</script>";
} else {
    //tampilkan pesan error
    echo "<script>alert('Data gagal dihapus: " . mysqli_error($conn) . "'); window.location.href='index.php';</script>";
}
//tutup koneksi
mysqli_close($conn);
?>
