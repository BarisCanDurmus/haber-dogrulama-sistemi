<?php include 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Analiz Portalı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f1f3f5; font-family: sans-serif; }
        .container { max-width: 1000px; margin-top: 30px; }
        .card { border-radius: 10px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .analiz-etiket { 
            display: inline-block; 
            padding: 8px 12px; 
            border-radius: 50px; 
            font-size: 0.85rem; 
            font-weight: bold;
            white-space: nowrap; 
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container-fluid justify-content-center">
        <span class="navbar-brand">🛡️ OTO-ANALİZ SİSTEMİ</span>
    </div>
</nav>

<div class="container">
    <div class="card p-4 mb-4">
        <form action="ekle.php" method="POST">
            <div class="row g-2">
                <div class="col-md-5"><input type="text" name="baslik" placeholder="Başlık" class="form-control" required></div>
                <div class="col-md-5"><input type="text" name="link" placeholder="Link" class="form-control" required></div>
                <div class="col-md-2"><button type="submit" class="btn btn-primary w-100">Analiz Et</button></div>
            </div>
        </form>
    </div>

    <div class="card p-4">
        <div class="d-flex justify-content-between mb-3">
            <h5 class="m-0">Sonuçlar</h5>
            <a href="temizle.php" class="btn btn-outline-danger btn-sm">🗑️ Temizle</a>
        </div>
        
        <table class="table align-middle">
            <thead class="table-light">
                <tr>
                    <th>Haber Başlığı</th>
                    <th>Kaynak</th>
                    <th class="text-end">Analiz Durumu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cek = $conn->query("SELECT * FROM haberler ORDER BY id DESC");
                while($satir = $cek->fetch_assoc()){
                    $renk = "bg-secondary text-white"; 
                    if(strpos($satir['durum'], 'KESİN') !== false) $renk = "bg-success text-white";
                    if(strpos($satir['durum'], 'ONAYLI') !== false) $renk = "bg-info text-dark";
                    if(strpos($satir['durum'], 'RİSKLİ') !== false) $renk = "bg-danger text-white";
                    if(strpos($satir['durum'], 'HABER') !== false) $renk = "bg-primary text-white";
                    if(strpos($satir['durum'], 'AKADEMİK') !== false) $renk = "bg-dark text-white";
                ?>
                <tr>
                    <td><strong><?php echo $satir['baslik']; ?></strong></td>
                    <td><a href="<?php echo $satir['link']; ?>" target="_blank" class="btn btn-sm btn-light border">Git</a></td>
                    <td class="text-end">
                        <span class="analiz-etiket <?php echo $renk; ?>">
                            <?php echo $satir['durum']; ?>
                        </span>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>