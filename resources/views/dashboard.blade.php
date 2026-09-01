@extends('layouts.app')

@section('title', 'Beranda - Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<style>
/* ===== HERO ===== */
.hero-home {
    position: relative;
    min-height: 100vh;
    background: url('{{ asset("images/kantor-desa-sirnamekar.png") }}') center center / cover no-repeat;
    display: flex;
    align-items: center;
}
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(26,92,46,0.55) 0%, rgba(0,0,0,0.35) 100%);
}
.hero-content {
    position: relative;
    z-index: 2;
    padding: 120px 0 80px;
}
.hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 13px;
    margin-bottom: 20px;
    backdrop-filter: blur(4px);
}
.hero-content h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 12px;
}
.hero-content h1 span { color: #e6a817; }
.hero-location {
    color: rgba(255,255,255,0.8);
    font-size: 15px;
    margin-bottom: 16px;
}
.hero-description {
    color: rgba(255,255,255,0.85);
    font-size: 16px;
    max-width: 560px;
    line-height: 1.7;
    margin-bottom: 32px;
}
.hero-buttons { display: flex; gap: 14px; flex-wrap: wrap; }
.btn-main {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #e6a817;
    color: #fff !important;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s;
}
.btn-main:hover { background: #c8900f; transform: translateY(-2px); }
.btn-outline-custom {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    border: 2px solid rgba(255,255,255,0.6);
    color: #fff !important;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s;
    backdrop-filter: blur(4px);
}
.btn-outline-custom:hover {
    background: rgba(255,255,255,0.15);
    border-color: #fff;
}

/* ===== STATISTIK ===== */
.statistic-wrapper {
    background: #fff;
    padding: 0;
    margin-top: -50px;
    position: relative;
    z-index: 3;
}
.stat-row {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.1);
    padding: 24px 32px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}
.stat-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 8px 0;
}
.stat-icon-box {
    width: 52px;
    height: 52px;
    background: linear-gradient(135deg, #1a5c2e, #2d8a4e);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 22px;
    flex-shrink: 0;
}
.stat-item h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1a5c2e;
    margin: 0;
}
.stat-item p {
    font-size: 12px;
    color: #888;
    margin: 0;
}

/* ===== SECTION UMUM ===== */
.section-space { padding: 80px 0; }
.bg-soft { background: #f8fdf9; }
.section-label {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #e6a817;
    margin-bottom: 10px;
}
.section-title {
    font-size: clamp(1.5rem, 3vw, 2.2rem);
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 16px;
}
.section-title span { color: #1a5c2e; }

/* ===== PROFIL SINGKAT ===== */
.profil-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
}
.profil-card img {
    width: 100%;
    height: 280px;
    object-fit: cover;
}
.profil-body { padding: 28px; }
.profil-body p { color: #666; line-height: 1.8; }
.more-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #1a5c2e;
    font-weight: 600;
    text-decoration: none;
}
.more-link:hover { color: #e6a817; }

/* ===== PETA GIS DI BERANDA ===== */
#peta-beranda {
    width: 100%;
    height: 420px;
    border-radius: 16px;
    z-index: 1;
    box-shadow: 0 4px 24px rgba(0,0,0,0.12);
}
.peta-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
}
.peta-header {
    padding: 16px 20px;
    background: #1a5c2e;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.peta-header h5 { margin: 0; font-size: 15px; font-weight: 600; }
.peta-header small { opacity: 0.8; font-size: 12px; }
.peta-link {
    background: #e6a817;
    color: #fff !important;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    white-space: nowrap;
}

/* ===== POPUP LEAFLET ===== */
.leaflet-popup-content-wrapper {
    border-radius: 12px !important;
    padding: 0 !important;
    overflow: hidden;
    min-width: 220px;
    max-width: 240px;
}
.leaflet-popup-content { margin: 0 !important; width: 100% !important; }
.p-foto { width: 100%; height: 130px; object-fit: cover; display: block; }
.p-nofoto {
    width: 100%; height: 60px;
    background: linear-gradient(135deg,#1a5c2e,#2d8a4e);
    display: flex; align-items: center; justify-content: center; font-size: 24px;
}
.p-body { padding: 10px 12px; }
.p-judul { font-size: 12px; font-weight: 700; color: #1a5c2e; margin-bottom: 4px; }
.p-btn {
    display: inline-block; background: #1a5c2e; color: #fff !important;
    padding: 4px 10px; border-radius: 20px; text-decoration: none; font-size: 10px; font-weight: 600;
}

/* ===== DUSUN ===== */
.dusun-card {
    background: #fff;
    border-radius: 14px;
    padding: 28px 20px;
    text-align: center;
    box-shadow: 0 2px 16px rgba(0,0,0,0.06);
    border-top: 4px solid #1a5c2e;
    transition: transform 0.2s;
}
.dusun-card:hover { transform: translateY(-4px); }
.dusun-number {
    font-size: 11px; font-weight: 700; letter-spacing: 2px;
    color: #e6a817; margin-bottom: 12px;
}
.dusun-icon { font-size: 28px; color: #1a5c2e; margin-bottom: 12px; }
.dusun-card h4 { font-size: 16px; font-weight: 700; color: #1a1a1a; margin-bottom: 6px; }
.dusun-card p { font-size: 13px; color: #888; margin: 0; }

/* ===== PEMERINTAHAN ===== */
.government-section { background: linear-gradient(135deg, #1a5c2e, #0d3d1a); padding: 80px 0; }
.official-card {
    background: rgba(255,255,255,0.1);
    border-radius: 16px;
    padding: 28px 20px;
    text-align: center;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,0.15);
}
.official-photo img {
    width: 100px; height: 100px;
    border-radius: 50%; object-fit: cover;
    border: 3px solid #e6a817; margin-bottom: 14px;
}
.official-card span { font-size: 12px; color: rgba(255,255,255,0.7); }
.official-card h4 { color: #fff; font-size: 16px; font-weight: 700; margin: 6px 0 0; }
.btn-light-custom {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,0.15); color: #fff !important;
    border: 1px solid rgba(255,255,255,0.4);
    padding: 12px 28px; border-radius: 8px;
    font-weight: 600; text-decoration: none; transition: all 0.2s;
}
.btn-light-custom:hover { background: rgba(255,255,255,0.25); }

/* ===== KONTAK ===== */
.contact-section { background: #e6a817; padding: 60px 0; }
.contact-box h2 { color: #fff; font-weight: 800; font-size: 2rem; }
.contact-box p { color: rgba(255,255,255,0.85); }
.btn-contact-light {
    display: inline-flex; align-items: center; gap: 8px;
    background: #fff; color: #1a5c2e !important;
    padding: 12px 24px; border-radius: 8px;
    font-weight: 700; text-decoration: none; transition: all 0.2s;
}
.btn-contact-light:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(0,0,0,0.15); }
</style>
@endsection

@section('content')

{{-- ===== HERO ===== --}}
<section class="hero-home" style="background-image: url('{{ asset('images/kantor-desa-sirnamekar.png') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-7">
                <span class="hero-badge">Website Resmi Pemerintah Desa</span>
                <h1>Selamat Datang di<br><span>Desa Sirnamekar</span></h1>
                <p class="hero-location">Kecamatan Tegalbuleud • Kabupaten Sukabumi • Jawa Barat</p>
                <p class="hero-description">
                    Media informasi desa, pemerintahan, potensi masyarakat,
                    berita, serta Peta GIS untuk mendukung mitigasi bencana.
                </p>
                <div class="hero-buttons">
                    <a href="#profil" class="btn-main">
                        <i class="bi bi-building"></i> Profil Desa
                    </a>
                    <a href="{{ url('/peta-gis') }}" class="btn-outline-custom">
                        <i class="bi bi-map"></i> Peta GIS
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ===== STATISTIK ===== --}}
<section class="statistic-wrapper">
    <div class="container">
        <div class="stat-row">
            <div class="stat-item">
                <div class="stat-icon-box"><i class="bi bi-people-fill"></i></div>
                <div><h3>-</h3><p>Jumlah Penduduk</p></div>
            </div>
            <div class="stat-item">
                <div class="stat-icon-box"><i class="bi bi-houses-fill"></i></div>
                <div><h3>4</h3><p>Dusun</p></div>
            </div>
            <div class="stat-item">
                <div class="stat-icon-box"><i class="bi bi-signpost-split-fill"></i></div>
                <div><h3>12</h3><p>Jumlah RT</p></div>
            </div>
            <div class="stat-item">
                <div class="stat-icon-box"><i class="bi bi-calendar-check-fill"></i></div>
                <div><h3>2006</h3><p>Tahun Pembentukan</p></div>
            </div>
        </div>
    </div>
</section>


{{-- ===== PROFIL SINGKAT ===== --}}
<section class="section-space" id="profil">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="profil-card">
                    <img src="{{ asset('images/desa-sirnamekar.jpg') }}" alt="Desa Sirnamekar">
                    <div class="profil-body">
                        <span class="section-label">PROFIL DESA</span>
                        <h2 class="section-title">Mengenal Desa <span>Sirnamekar</span></h2>
                        <p>
                            Desa Sirnamekar merupakan hasil pemekaran dari Desa Bangbayang
                            berdasarkan Peraturan Daerah Kabupaten Sukabumi Nomor 5 Tahun 2006,
                            terletak di Kecamatan Tegalbuleud, Kabupaten Sukabumi.
                        </p>
                        <a href="{{ url('/profil') }}" class="more-link">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <span class="section-label">EMPAT DUSUN</span>
                <h2 class="section-title">Wilayah <span>Administrasi</span></h2>
                <div class="row g-3 mt-2">
                    @php
                        $dusun = [
                            ['01', 'Cijoho', 'bi-house-door-fill'],
                            ['02', 'Babakan Sirna', 'bi-house-door-fill'],
                            ['03', 'Puncak Pari', 'bi-house-door-fill'],
                            ['04', 'Cipanengah', 'bi-house-door-fill'],
                        ];
                    @endphp
                    @foreach($dusun as $item)
                    <div class="col-6">
                        <div class="dusun-card">
                            <div class="dusun-number">DUSUN {{ $item[0] }}</div>
                            <div class="dusun-icon"><i class="bi {{ $item[2] }}"></i></div>
                            <h4>{{ $item[1] }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ===== PETA GIS DI BERANDA ===== --}}
<section class="section-space bg-soft">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4">
                <span class="section-label">PETA DIGITAL DESA</span>
                <h2 class="section-title">Peta GIS & <span>Rawan Bencana</span></h2>
                <p style="color:#666;line-height:1.8;">
                    Peta interaktif Desa Sirnamekar menampilkan titik rawan
                    longsor, banjir, jalur evakuasi, dan batas wilayah desa.
                    Klik titik di peta untuk melihat detail informasi.
                </p>
                <div style="display:flex;flex-direction:column;gap:8px;margin:16px 0;">
                    <span style="font-size:13px;color:#444;">
                        <span style="display:inline-block;width:12px;height:12px;background:#e74c3c;clip-path:polygon(50% 0%,0% 100%,100% 100%);margin-right:8px;"></span>
                        Rawan Longsor
                    </span>
                    <span style="font-size:13px;color:#444;">
                        <span style="display:inline-block;width:12px;height:12px;background:#3498db;clip-path:polygon(50% 0%,0% 100%,100% 100%);margin-right:8px;"></span>
                        Rawan Banjir
                    </span>
                    <span style="font-size:13px;color:#444;">
                        <span style="display:inline-block;width:12px;height:12px;background:#27ae60;clip-path:polygon(50% 0%,0% 100%,100% 100%);margin-right:8px;"></span>
                        Jalur Evakuasi
                    </span>
                </div>
                <a href="{{ url('/peta-gis') }}" class="btn-main">
                    <i class="bi bi-map-fill"></i> Buka Peta Lengkap
                </a>
            </div>
            <div class="col-lg-8">
                <div class="peta-card">
                    <div class="peta-header">
                        <div>
                            <h5><i class="bi bi-map-fill me-2"></i>Peta Interaktif Desa Sirnamekar</h5>
                            <small>Klik titik untuk melihat informasi lokasi</small>
                        </div>
                        <a href="{{ url('/peta-gis') }}" class="peta-link">Peta Penuh →</a>
                    </div>
                    <div id="peta-beranda"></div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ===== PEMERINTAHAN ===== --}}
<section class="government-section">
    <div class="container">
        <div class="section-heading text-center">
            <span class="section-label">PEMERINTAHAN DESA</span>
            <h2 class="section-title text-white">Pemerintah Desa <span style="color:#e6a817">Sirnamekar</span></h2>
        </div>
        <div class="row justify-content-center g-4 mt-4">
            <div class="col-md-4 col-lg-3">
                <div class="official-card">
                    <div class="official-photo">
                        <img src="{{ asset('images/kepala-desa.jpg') }}" alt="Kepala Desa">
                    </div>
                    <span>Kepala Desa</span>
                    <h4>Ajat Sudrajat</h4>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="official-card">
                    <div class="official-photo">
                        <img src="{{ asset('images/sekretaris-desa.jpg') }}" alt="Sekretaris Desa">
                    </div>
                    <span>Sekretaris Desa</span>
                    <h4>Aang Suryana, S.Pd.I</h4>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ url('/pemerintahan') }}" class="btn-light-custom">
                Lihat Struktur Pemerintahan <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>


{{-- ===== KONTAK CEPAT ===== --}}
<section class="contact-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h2 class="contact-box">Butuh Informasi dari<br>Pemerintah Desa?</h2>
                <p style="color:rgba(255,255,255,0.85)">
                    Silakan menghubungi Pemerintah Desa Sirnamekar
                    untuk informasi dan pelayanan lebih lanjut.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <a href="{{ url('/kontak') }}" class="btn-contact-light">
                    <i class="bi bi-envelope-fill"></i> Hubungi Desa
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
var titikRawan = [
    { nama:"Informasi Kawasan Rawan Banjir", lat:-7.272217, lng:106.765665, foto:"https://drive.google.com/thumbnail?id=1qUFb3nZTRALFdLXdCymG-16vFnk0yuoS&sz=w400", maps:"https://maps.app.goo.gl/3YWqBQtaWjXvJTtE7", warna:"#3498db" },
    { nama:"Informasi Kawasan Rawan Longsor", lat:-7.270954, lng:106.769606, foto:"https://drive.google.com/thumbnail?id=12N0Z5tc_kJJd2qZsZIdK5XRTgrE12P3T&sz=w400", maps:"https://maps.app.goo.gl/Petnq8LXReCUtfDA7", warna:"#e74c3c" },
    { nama:"Hati-hati Longsoran Batu 2", lat:-7.278703, lng:106.760398, foto:"https://drive.google.com/thumbnail?id=1j-D0eD8Laswsynemn8IzOTDqJMAD91S3&sz=w400", maps:"https://maps.app.goo.gl/dSz6YvpwEu9MnWve8", warna:"#e74c3c" },
    { nama:"Hati-hati Longsoran Batu 1", lat:-7.272217, lng:106.765665, foto:"https://drive.google.com/thumbnail?id=1QOF5ZDoUOuc5A2aL-xOceeh4c3TvGRuT&sz=w400", maps:"https://maps.app.goo.gl/PDq9i7hBkbDuHJEW9", warna:"#e74c3c" },
    { nama:"Hati-hati Longsoran Batu 3", lat:-7.282671, lng:106.747524, foto:"https://drive.google.com/thumbnail?id=1e11YY_j5zyDjvbmq2wrKAg4Tpx7pgcwz&sz=w400", maps:"https://maps.app.goo.gl/TjFBRe9FRY8qzhvK6", warna:"#e74c3c" },
    { nama:"Hati-hati Banjir Bandang", lat:-7.283284, lng:106.746135, foto:"https://drive.google.com/thumbnail?id=1pkOljfzcYxideNNH96ZoocoWr2cHW6Uv&sz=w400", maps:"https://maps.app.goo.gl/NhEVZRTiTkntRhSg8", warna:"#3498db" },
    { nama:"Hati-hati Kebakaran Hutan", lat:-7.282716, lng:106.749598, foto:"https://drive.google.com/thumbnail?id=1IQGb9kOorMCrFvIyjxiOi-GChTAViWib&sz=w400", maps:"https://maps.app.goo.gl/XDKBwfYpJ9DpGV89", warna:"#e67e22" },
    { nama:"Evakuasi 1", lat:-7.279754, lng:106.753544, foto:"https://drive.google.com/thumbnail?id=1aT0IJCnPd3BPNCVsUGo-yqz3jsH21XO-&sz=w400", maps:"https://maps.app.goo.gl/6ZhY7kUMWsRvXxW76", warna:"#27ae60" },
    { nama:"Evakuasi 2", lat:-7.279732, lng:106.752233, foto:"https://drive.google.com/thumbnail?id=1bjPtWhqHsAqEDGy5H5PbpFgq-gSgsz-D&sz=w400", maps:"https://maps.app.goo.gl/2PHMDeV6fZuLGrUt9", warna:"#27ae60" },
    { nama:"Titik Evakuasi", lat:-7.27882, lng:106.754525, foto:"https://drive.google.com/thumbnail?id=1-oc6QGnAzWtZYatKNztLjiP8sKLC-_UM&sz=w400", maps:"https://maps.app.goo.gl/1y5h1k7ak3K3oVwo6", warna:"#8e44ad" },
    { nama:"Batas Maksimum Jembatan A", lat:-7.281894, lng:106.744636, foto:"https://drive.google.com/thumbnail?id=1cFCtn1Kf_huRHYoAQakkoneVIqxEDrQi&sz=w400", maps:"https://maps.app.goo.gl/aNHSYtWAYcVhJF5z6", warna:"#2c3e50" },
    { nama:"Batas Maksimum Jembatan B", lat:-7.281235, lng:106.745047, foto:"https://drive.google.com/thumbnail?id=119d-_DjETfXgZwYrbIbMYbFzuoNgXMsA&sz=w400", maps:"https://maps.app.goo.gl/uN5tPkTNwy3EQYCj8", warna:"#2c3e50" }
];

var map = L.map('peta-beranda', { center: [-7.278, 106.755], zoom: 13, zoomControl: true });

L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles © Esri', maxZoom: 19
}).addTo(map);

function buatIkon(warna) {
    return L.divIcon({
        className: '',
        html: '<div style="width:0;height:0;border-left:9px solid transparent;border-right:9px solid transparent;border-bottom:18px solid ' + warna + ';filter:drop-shadow(0 2px 3px rgba(0,0,0,0.4));"></div>',
        iconSize: [18, 18], iconAnchor: [9, 18], popupAnchor: [0, -20]
    });
}

titikRawan.forEach(function(t) {
    var marker = L.marker([t.lat, t.lng], { icon: buatIkon(t.warna) });
    var fotoHtml = '<img class="p-foto" src="' + t.foto + '" onerror="this.outerHTML=\'<div class=p-nofoto>🏔️</div>\'">';
    marker.bindPopup(
        fotoHtml +
        '<div class="p-body">' +
            '<div class="p-judul">' + t.nama + '</div>' +
            '<a href="' + t.maps + '" target="_blank" class="p-btn">📍 Google Maps</a>' +
        '</div>',
        { maxWidth: 240 }
    );
    marker.addTo(map);
});
</script>
@endsection