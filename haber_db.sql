-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2026, 21:47:28
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `haber_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `durum` varchar(50) DEFAULT 'Bekliyor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `link`, `durum`) VALUES
(1, '2026 Memur Atama Takvimi Yayınlandı', '2026 Memur Atama Takvimi Yayınlandı', '🔍 ANALİZ: Kaynak Belirsiz'),
(2, 'Yerli İHA Sistemlerinde Yeni Rekor Kırıldı', 'https://www.aa.com.tr/tr/savunma/iha-rekor-2026', '✔️ ONAYLI: Resmi Haber Ajansı'),
(3, 'arın Gece Tüm Şehirde Elektrik Kesintisi Olacak', 'https://t.me/sehir_haberleri_canli', '⚠️ RİSKLİ: Sosyal Medya İddiası'),
(4, 'Bartın Üniversitesi Mezuniyet Töreni Tarihleri', 'https://www.bartin.edu.tr/etkinlikler/mezuniyet-2026', '🎓 AKADEMİK: Üniversite Kaynağı');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
