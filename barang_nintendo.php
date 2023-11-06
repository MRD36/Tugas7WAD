<html>
<head>
    <title>Barang Game Nintendo</title>
</head>
<body>
    <h1>Barang Game Nintendo</h1>
    <form action="insert.php" method="post">
        <p>Masukkan data barang baru:</p>
        <p>Nama Barang: <input type="text" name="nama_barang" required></p>
        <p>Harga Barang: <input type="number" name="harga_barang" required></p>
        <p>Stok Barang: <input type="number" name="stok_barang" required></p>
        <p><input type="submit" value="Simpan"></p>
    </form>
    <hr>
    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Aksi</th>
        </tr>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "nintendo_db");
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM barang";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id_barang"] . "</td>";
                echo "<td>" . $row["nama_barang"] . "</td>";
                echo "<td>" . $row["harga_barang"] . "</td>";
                echo "<td>" . $row["stok_barang"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id_barang"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id_barang"] . "'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data barang</td></tr>";
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
