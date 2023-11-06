--membuat database nintendo_db
CREATE DATABASE nintendo_db;

--menggunakan database nintendo_db
USE nintendo_db;

--membuat tabel barang
CREATE TABLE barang (
    id_barang INT PRIMARY KEY AUTO_INCREMENT,
    nama_barang VARCHAR(50) NOT NULL,
    harga_barang INT NOT NULL,
    stok_barang INT NOT NULL
);

--menyisipkan data barang
INSERT INTO barang (nama_barang, harga_barang, stok_barang) VALUES
('Nintendo Switch', 5000000, 10),
('Nintendo 3DS', 3000000, 5),
('Nintendo Wii', 4000000, 3),
('Super Mario Odyssey', 800000, 15),
('The Legend of Zelda: Breath of the Wild', 900000, 12),
('Animal Crossing: New Horizons', 700000, 20);
