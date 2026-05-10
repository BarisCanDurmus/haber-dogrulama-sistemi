<?php
include 'baglan.php';

if ($_POST) {
    $baslik = $_POST['baslik'];
    $link = $_POST['link'];

    
    if (strpos($link, 'gov.tr') !== false) {
        $durum = "✅ KESİN: Resmi Devlet Kaynağı";
    } elseif (strpos($link, 'aa.com.tr') !== false || strpos($link, 'trthaber.com') !== false) {
        $durum = "✔️ ONAYLI: Resmi Haber Ajansı";
    } elseif (strpos($link, 'edu.tr') !== false) {
        $durum = "🎓 AKADEMİK: Üniversite Kaynağı";
    } elseif (strpos($link, 'facebook.com') !== false || strpos($link, 'twitter.com') !== false || strpos($link, 't.me') !== false) {
        $durum = "⚠️ RİSKLİ: Sosyal Medya İddiası";
    } elseif (strpos($link, 'sozcu.com.tr') !== false || strpos($link, 'hurriyet.com.tr') !== false) {
        $durum = "📰 HABER: Ulusal Basın Kaynağı";
    } else {
        $durum = "🔍 ANALİZ: Kaynak Belirsiz";
    }
    

    $stmt = $conn->prepare("INSERT INTO haberler (baslik, link, durum) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $baslik, $link, $durum);
    $stmt->execute();

    header("Location: index.php"); 
}
?>