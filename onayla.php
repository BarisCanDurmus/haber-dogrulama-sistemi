<?php
include 'baglan.php';


if (isset($_GET['id']) && isset($_GET['durum'])) {
    $id = $_GET['id'];
    $durum = $_GET['durum'];

    
    $conn->query("UPDATE haberler SET durum = '$durum' WHERE id = $id");

    
    header("Location: index.php"); 
}
?>