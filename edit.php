//file edit.php
<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "nintendo_db");
//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//ambil id barang dari url
$id_barang = $_GET["id"];
//query untuk mengambil data barang berdasarkan id
$sql = "SELECT * FROM barang WHERE id_barang = $id_barang";
$result = mysqli_query($conn, $sql);
//cek hasil query
if (mysqli_num_rows($result) > 0) {
    //ambil data barang
    $row = mysqli_fetch_assoc($result);
    //simpan data barang ke variabel
    $nama_barang = $row["nama_barang"];
    $harga_barang = $row["harga_barang"];
    $stok_barang = $row["stok_barang"];
} else {
    //tampilkan pesan jika tidak ada data barang
    echo "<script>alert('Data tidak ditemukan'); window.location.href='index.php';</script>";
}
//tutup koneksi
mysqli_close($conn);
?>
<html>
<head>
    <title>Edit Barang Game Nintendo</title>
</head>
<body>
    <h1>Edit Barang Game Nintendo</h1>
    <form action="update.php" method="post">
        <p>Ubah data barang:</p>
        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
        <p>Nama Barang: <input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" required></p>
        <p>Harga Barang: <input type="number" name="harga_barang" value="<?php echo $harga_barang; ?>" required></p>
        <p>Stok Barang: <input type="number" name="stok_barang" value="<?php echo $stok_barang; ?>" required></p>
        <p><input type="submit" value="Update"></p>
    </form>
</body>
</html>
