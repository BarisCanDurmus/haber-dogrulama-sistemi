<?php
$conn = new mysqli("localhost", "root", "", "haber_db");
if ($conn->connect_error) {
    die("Veritabanına bağlanamadı: " . $conn->connect_error);
}
?>