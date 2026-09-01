@extends('layouts.app')

@section('title', 'Peta GIS Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/peta.css') }}">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<style>
/* ===== MAP CONTAINER ===== */
#peta-interaktif {
    width: 100%;
    height: 560px;
    border-radius: 0 0 12px 12px;
    z-index: 1;
}

/* ===== LEGENDA ===== */
.legenda-box {
    background: white;
    border-radius: 10px;
    padding: 14px 16px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
    margin-top: 20px;
}
.legenda-box h6 {
    font-weight: 700;
    color: #1a5c2e;
    margin-bottom: 12px;
    font-size: 14px;
}
.legenda-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 8px;
    font-size: 13px;
    color: #444;
}
.legenda-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    flex-shrink: 0;
}
.legenda-segitiga {
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    flex-shrink: 0;
}

/* ===== POPUP CUSTOM ===== */
.leaflet-popup-content-wrapper {
    border-radius: 12px !important;
    padding: 0 !important;
    overflow: hidden;
    min-width: 260px;
    max-width: 280px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2) !important;
}
.leaflet-popup-content {
    margin: 0 !important;
    width: 100% !important;
}
.popup-foto {
    width: 100%;
    height: 160px;
    object-fit: cover;
    display: block;
}
.popup-nofoto {
    width: 100%;
    height: 80px;
    background: linear-gradient(135deg, #1a5c2e, #2d8a4e);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
}
.popup-body {
    padding: 12px 14px;
}
.popup-judul {
    font-size: 13px;
    font-weight: 700;
    color: #1a5c2e;
    margin-bottom: 6px;
    line-height: 1.4;
}
.popup-desc {
    font-size: 11px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 10px;
}
.popup-btn {
    display: inline-block;
    background: #1a5c2e;
    color: #fff !important;
    padding: 6px 12px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 11px;
    font-weight: 600;
}
.popup-btn:hover {
    background: #e6a817;
    color: #fff !important;
}
</style>
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="gis-hero">
    <div class="gis-hero-overlay"></div>
    <div class="container position-relative">
        <div class="gis-hero-content">
            <span class="gis-hero-badge">Peta GIS</span>
            <h1>Peta GIS Desa Sirnamekar</h1>
            <p>
                Informasi pemetaan wilayah serta tingkat kerawanan
                longsor dan banjir di Desa Sirnamekar,
                Kecamatan Tegalbuleud, Kabupaten Sukabumi.
            </p>
            <div class="gis-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Peta GIS</span>
            </div>
        </div>
    </div>
</section>


{{-- ================= PETA INTERAKTIF ================= --}}
<section class="gis-section">
    <div class="container">

        <div class="section-heading text-center">
            <span class="section-label">PEMETAAN DESA</span>
            <h2 class="section-title">Peta Rawan Longsor & Banjir</h2>
            <p>Klik pada titik di peta untuk melihat informasi, foto, dan detail lokasi.</p>
        </div>

        <div class="gis-map-card">

            <div class="gis-map-header">
                <div>
                    <span class="gis-map-icon">
                        <i class="bi bi-map-fill"></i>
                    </span>
                    <div>
                        <h4>Peta Interaktif Desa Sirnamekar</h4>
                        <p>Kerawanan longsor dan banjir • Klik titik untuk detail</p>
                    </div>
                </div>
                <span class="gis-map-status">
                    <i class="bi bi-geo-alt-fill"></i>
                    Tegalbuleud
                </span>
            </div>

            {{-- PETA LEAFLET --}}
            <div id="peta-interaktif"></div>

            <div class="gis-map-footer">
                <div class="gis-info">
                    <i class="bi bi-info-circle-fill"></i>
                    <div>
                        <strong>Informasi Peta</strong>
                        <p>Peta menampilkan titik rawan longsor, banjir, jalur evakuasi, dan batas jembatan di Desa Sirnamekar.</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- LEGENDA --}}
        <div class="legenda-box mt-4">
            <h6><i class="bi bi-layers-fill me-2"></i>Legenda Peta</h6>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="legenda-item">
                        <div class="legenda-segitiga" style="border-bottom: 14px solid #e74c3c;"></div>
                        Rawan Longsor
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="legenda-item">
                        <div class="legenda-segitiga" style="border-bottom: 14px solid #3498db;"></div>
                        Rawan Banjir
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="legenda-item">
                        <div class="legenda-segitiga" style="border-bottom: 14px solid #27ae60;"></div>
                        Jalur Evakuasi
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="legenda-item">
                        <div class="legenda-segitiga" style="border-bottom: 14px solid #e67e22;"></div>
                        Kebakaran Hutan
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="legenda-item">
                        <div class="legenda-segitiga" style="border-bottom: 14px solid #8e44ad;"></div>
                        Titik Evakuasi
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="legenda-item">
                        <div class="legenda-segitiga" style="border-bottom: 14px solid #2c3e50;"></div>
                        Batas Jembatan
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
// ===== DATA TITIK RAWAN =====
var titikRawan = [
    {
        n: 1, nama: "Informasi Kawasan Rawan Banjir",
        lat: -7.272217, lng: 106.765665,
        foto: "https://drive.google.com/thumbnail?id=1qUFb3nZTRALFdLXdCymG-16vFnk0yuoS&sz=w400",
        maps: "https://maps.app.goo.gl/3YWqBQtaWjXvJTtE7",
        desc: "Kawasan ini merupakan area rawan banjir. Warga diharapkan waspada saat curah hujan tinggi.",
        warna: "#3498db", kategori: "banjir"
    },
    {
        n: 2, nama: "Informasi Kawasan Rawan Longsor",
        lat: -7.270954, lng: 106.769606,
        foto: "https://drive.google.com/thumbnail?id=12N0Z5tc_kJJd2qZsZIdK5XRTgrE12P3T&sz=w400",
        maps: "https://maps.app.goo.gl/Petnq8LXReCUtfDA7",
        desc: "Kawasan ini merupakan area rawan longsor. Hindari beraktivitas di lereng bukit saat hujan deras.",
        warna: "#e74c3c", kategori: "longsor"
    },
    {
        n: 3, nama: "Hati-hati Longsoran Batu 2",
        lat: -7.278703, lng: 106.760398,
        foto: "https://drive.google.com/thumbnail?id=1j-D0eD8Laswsynemn8IzOTDqJMAD91S3&sz=w400",
        maps: "https://maps.app.goo.gl/dSz6YvpwEu9MnWve8",
        desc: "Titik rawan jatuhan batu dari lereng. Pengguna jalan diharap berhati-hati.",
        warna: "#e74c3c", kategori: "longsor"
    },
    {
        n: 4, nama: "Hati-hati Longsoran Batu 1",
        lat: -7.272217, lng: 106.765665,
        foto: "https://drive.google.com/thumbnail?id=1QOF5ZDoUOuc5A2aL-xOceeh4c3TvGRuT&sz=w400",
        maps: "https://maps.app.goo.gl/PDq9i7hBkbDuHJEW9",
        desc: "Titik rawan jatuhan batu dari lereng. Pengguna jalan diharap berhati-hati.",
        warna: "#e74c3c", kategori: "longsor"
    },
    {
        n: 5, nama: "Hati-hati Longsoran Batu 3",
        lat: -7.282671, lng: 106.747524,
        foto: "https://drive.google.com/thumbnail?id=1e11YY_j5zyDjvbmq2wrKAg4Tpx7pgcwz&sz=w400",
        maps: "https://maps.app.goo.gl/TjFBRe9FRY8qzhvK6",
        desc: "Titik rawan jatuhan batu dari lereng. Pengguna jalan diharap berhati-hati.",
        warna: "#e74c3c", kategori: "longsor"
    },
    {
        n: 6, nama: "Hati-hati Banjir Bandang",
        lat: -7.283284, lng: 106.746135,
        foto: "https://drive.google.com/thumbnail?id=1pkOljfzcYxideNNH96ZoocoWr2cHW6Uv&sz=w400",
        maps: "https://maps.app.goo.gl/NhEVZRTiTkntRhSg8",
        desc: "Area rawan banjir bandang. Segera evakuasi ke tempat lebih tinggi jika debit sungai meningkat.",
        warna: "#3498db", kategori: "banjir"
    },
    {
        n: 7, nama: "Hati-hati Kebakaran Hutan",
        lat: -7.282716, lng: 106.749598,
        foto: "https://drive.google.com/thumbnail?id=1IQGb9kOorMCrFvIyjxiOi-GChTAViWib&sz=w400",
        maps: "https://maps.app.goo.gl/XDKBwfYpJ9DpGV89",
        desc: "Area rawan kebakaran hutan. Dilarang membakar sampah atau lahan di musim kemarau.",
        warna: "#e67e22", kategori: "kebakaran"
    },
    {
        n: 8, nama: "Evakuasi 1",
        lat: -7.279754, lng: 106.753544,
        foto: "https://drive.google.com/thumbnail?id=1aT0IJCnPd3BPNCVsUGo-yqz3jsH21XO-&sz=w400",
        maps: "https://maps.app.goo.gl/6ZhY7kUMWsRvXxW76",
        desc: "Jalur evakuasi nomor 1. Ikuti rambu ini menuju titik kumpul yang aman saat terjadi bencana.",
        warna: "#27ae60", kategori: "evakuasi"
    },
    {
        n: 9, nama: "Evakuasi 2",
        lat: -7.279732, lng: 106.752233,
        foto: "https://drive.google.com/thumbnail?id=1bjPtWhqHsAqEDGy5H5PbpFgq-gSgsz-D&sz=w400",
        maps: "https://maps.app.goo.gl/2PHMDeV6fZuLGrUt9",
        desc: "Jalur evakuasi nomor 2. Ikuti rambu ini menuju titik kumpul yang aman saat terjadi bencana.",
        warna: "#27ae60", kategori: "evakuasi"
    },
    {
        n: 10, nama: "Evakuasi 3",
        lat: -7.280485, lng: 106.752049,
        foto: "https://drive.google.com/thumbnail?id=1cl3z9ebNKnIJqcJPPlvxE7oUaCmwul1t&sz=w400",
        maps: "https://maps.app.goo.gl/KZjhRzvYytmDytsdA",
        desc: "Jalur evakuasi nomor 3. Ikuti rambu ini menuju titik kumpul yang aman saat terjadi bencana.",
        warna: "#27ae60", kategori: "evakuasi"
    },
    {
        n: 11, nama: "Evakuasi 4",
        lat: -7.28094, lng: 106.750932,
        foto: "https://drive.google.com/thumbnail?id=1zbyC69fSvY2jgFVhYvpYMdSiOPKLgmF5&sz=w400",
        maps: "https://maps.app.goo.gl/7bQr8HpYbW1uXyN5A",
        desc: "Jalur evakuasi nomor 4. Ikuti rambu ini menuju titik kumpul yang aman saat terjadi bencana.",
        warna: "#27ae60", kategori: "evakuasi"
    },
    {
        n: 12, nama: "Evakuasi 5",
        lat: -7.282984, lng: 106.745114,
        foto: "https://drive.google.com/thumbnail?id=1TeDtgD6FgopN7zqKbiamjQlQT6SBVu6i&sz=w400",
        maps: "https://maps.app.goo.gl/KjzNxE721SBANBCp6",
        desc: "Jalur evakuasi nomor 5. Ikuti rambu ini menuju titik kumpul yang aman saat terjadi bencana.",
        warna: "#27ae60", kategori: "evakuasi"
    },
    {
        n: 13, nama: "Titik Evakuasi",
        lat: -7.27882, lng: 106.754525,
        foto: "https://drive.google.com/thumbnail?id=1-oc6QGnAzWtZYatKNztLjiP8sKLC-_UM&sz=w400",
        maps: "https://maps.app.goo.gl/1y5h1k7ak3K3oVwo6",
        desc: "Titik kumpul evakuasi utama Desa Sirnamekar. Warga berkumpul di sini saat terjadi bencana.",
        warna: "#8e44ad", kategori: "evakuasi"
    },
    {
        n: 14, nama: "Titik Pengungsian",
        lat: -7.27882, lng: 106.754525,
        foto: "https://drive.google.com/thumbnail?id=1-oc6QGnAzWtZYatKNztLjiP8sKLC-_UM&sz=w400",
        maps: "https://maps.app.goo.gl/1y5h1k7ak3K3oVwo6",
        desc: "Lokasi pengungsian sementara warga terdampak bencana. Tersedia fasilitas darurat dan posko bantuan.",
        warna: "#8e44ad", kategori: "evakuasi"
    },
    {
        n: 15, nama: "Batas Maksimum Jembatan A",
        lat: -7.281894, lng: 106.744636,
        foto: "https://drive.google.com/thumbnail?id=1cFCtn1Kf_huRHYoAQakkoneVIqxEDrQi&sz=w400",
        maps: "https://maps.app.goo.gl/aNHSYtWAYcVhJF5z6",
        desc: "Batas maksimum beban kendaraan di Jembatan A. Kendaraan berat dilarang melintas.",
        warna: "#2c3e50", kategori: "jembatan"
    },
    {
        n: 16, nama: "Batas Maksimum Jembatan B",
        lat: -7.281235, lng: 106.745047,
        foto: "https://drive.google.com/thumbnail?id=119d-_DjETfXgZwYrbIbMYbFzuoNgXMsA&sz=w400",
        maps: "https://maps.app.goo.gl/uN5tPkTNwy3EQYCj8",
        desc: "Batas maksimum beban kendaraan di Jembatan B. Kendaraan berat dilarang melintas.",
        warna: "#2c3e50", kategori: "jembatan"
    }
];

// ===== INISIALISASI PETA =====
var map = L.map('peta-interaktif', {
    center: [-7.278, 106.755],
    zoom: 14,
    zoomControl: true
});

// Basemap satelit
L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles © Esri — Source: Esri, USGS, NOAA',
    maxZoom: 19
}).addTo(map);

// Basemap jalan (overlay)
var jalanLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
    opacity: 0.3,
    maxZoom: 19
}).addTo(map);

// ===== FUNGSI BUAT IKON SEGITIGA =====
function buatIkon(warna) {
    return L.divIcon({
        className: '',
        html: '<div style="width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:20px solid ' + warna + ';filter:drop-shadow(0 2px 3px rgba(0,0,0,0.4));"></div>',
        iconSize: [20, 20],
        iconAnchor: [10, 20],
        popupAnchor: [0, -22]
    });
}

// ===== TAMBAH MARKER KE PETA =====
titikRawan.forEach(function(t) {
    var marker = L.marker([t.lat, t.lng], { icon: buatIkon(t.warna) });

    var fotoHtml = '<img class="popup-foto" src="' + t.foto + '" onerror="this.outerHTML=\'<div class=popup-nofoto>🏔️</div>\'">';

    var popupHtml =
        fotoHtml +
        '<div class="popup-body">' +
            '<div class="popup-judul">' + t.nama + '</div>' +
            '<div class="popup-desc">' + t.desc + '</div>' +
            '<a href="' + t.maps + '" target="_blank" class="popup-btn">📍 Lihat di Google Maps</a>' +
        '</div>';

    marker.bindPopup(popupHtml, { maxWidth: 280 });
    marker.addTo(map);
});

// ===== LAYER CONTROL =====
var baseMaps = {
    "Satelit (Esri)": L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', { maxZoom: 19 }),
    "OpenStreetMap": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19 })
};
L.control.layers(baseMaps).addTo(map);
</script>
@endsection