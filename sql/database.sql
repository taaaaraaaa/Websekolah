CREATE DATABASE bina_iman;

USE bina_iman;

CREATE TABLE pendaftaran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100),
  telepon VARCHAR(20),
  pesan TEXT,
  tanggal_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
