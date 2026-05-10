<?php
include 'baglan.php';


$sorgu = $conn->query("TRUNCATE TABLE haberler");


header("Location: index.php");
?>