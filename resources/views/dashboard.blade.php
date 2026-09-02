@extends('layouts.app')

@section('title', 'Beranda - Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="hero-home"
    style="background-image: url('{{ asset('images/kantor-desa-sirnamekar.png') }}');">

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <div class="row">

            <div class="col-lg-7">

                <span class="hero-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    Website Resmi Pemerintah Desa
                </span>

                <h1>
                    Selamat Datang di
                    <span>Desa Sirnamekar</span>
                </h1>

                <p class="hero-location">
                    <i class="bi bi-geo-alt-fill"></i>
                    Kecamatan Tegalbuleud • Kabupaten Sukabumi • Jawa Barat
                </p>

                <p class="hero-description">
                    Media informasi desa, pemerintahan, potensi masyarakat,
                    berita, dokumentasi, serta Peta GIS untuk mendukung
                    informasi wilayah dan mitigasi bencana.
                </p>

                <div class="hero-buttons">

                    <a href="#profil" class="btn-main">
                        <i class="bi bi-building-fill"></i>
                        Profil Desa
                    </a>

                    <a href="{{ url('/peta-gis') }}"
                       class="btn-outline-custom">

                        <i class="bi bi-map-fill"></i>
                        Peta GIS

                    </a>

                </div>

            </div>

        </div>

    </div>

    <div class="hero-scroll">

        <i class="bi bi-chevron-down"></i>

        <span>Scroll</span>

    </div>

</section>


{{-- ================= STATISTIK ================= --}}
<section class="statistic-wrapper">

    <div class="container">

        <div class="stat-row">

            <div class="stat-item">

                <div class="stat-icon-box stat-green">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div>
                    <h3>-</h3>
                    <p>Jumlah Penduduk</p>
                </div>

            </div>


            <div class="stat-item">

                <div class="stat-icon-box stat-orange">
                    <i class="bi bi-houses-fill"></i>
                </div>

                <div>
                    <h3>4</h3>
                    <p>Dusun</p>
                </div>

            </div>


            <div class="stat-item">

                <div class="stat-icon-box stat-blue">
                    <i class="bi bi-signpost-split-fill"></i>
                </div>

                <div>
                    <h3>12</h3>
                    <p>Jumlah RT</p>
                </div>

            </div>


            <div class="stat-item">

                <div class="stat-icon-box stat-purple">
                    <i class="bi bi-calendar-check-fill"></i>
                </div>

                <div>
                    <h3>2006</h3>
                    <p>Tahun Pembentukan</p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= PROFIL DAN DUSUN ================= --}}
<section class="section-space" id="profil">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <div class="profil-card">

                    <div class="profil-image-wrap">

                        <img
                            src="{{ asset('images/desa-sirnamekar.jpg') }}"
                            alt="Desa Sirnamekar">

                        <span class="profil-image-badge">
                            <i class="bi bi-geo-alt-fill"></i>
                            Desa Sirnamekar
                        </span>

                    </div>

                    <div class="profil-body">

                        <span class="section-label">
                            Profil Desa
                        </span>

                        <h2 class="section-title">
                            Mengenal Desa
                            <span>Sirnamekar</span>
                        </h2>

                        <p>
                            Desa Sirnamekar merupakan hasil pemekaran
                            dari Desa Bangbayang berdasarkan Peraturan
                            Daerah Kabupaten Sukabumi Nomor 5 Tahun 2006,
                            terletak di Kecamatan Tegalbuleud,
                            Kabupaten Sukabumi, Jawa Barat.
                        </p>

                        <a href="{{ url('/profil') }}"
                           class="more-link">

                            Selengkapnya

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="section-label">
                    Wilayah Administrasi
                </div>

                <h2 class="section-title">
                    Empat Dusun
                    <span>Sirnamekar</span>
                </h2>

                @php

                    $dusun = [

                        [
                            '01',
                            'Cijoho',
                            'bi-tree-fill',
                            'dusun-green',
                            '🌴'
                        ],

                        [
                            '02',
                            'Babakan Sirna',
                            'bi-house-fill',
                            'dusun-orange',
                            '🏡'
                        ],

                        [
                            '03',
                            'Puncak Pari',
                            'bi-geo-alt-fill',
                            'dusun-blue',
                            '⛰️'
                        ],

                        [
                            '04',
                            'Cipanengah',
                            'bi-flower1',
                            'dusun-purple',
                            '🌿'
                        ]

                    ];

                @endphp


                <div class="row g-4 mt-2">

                    @foreach($dusun as $item)

                        <div class="col-6">

                            <div class="dusun-card">

                                <div class="dusun-top">

                                    <span>
                                        DUSUN {{ $item[0] }}
                                    </span>

                                    <div class="dusun-emoji">
                                        {{ $item[4] }}
                                    </div>

                                </div>

                                <div class="dusun-bottom">

                                    <div class="dusun-icon
                                        {{ $item[3] }}">

                                        <i class="bi {{ $item[2] }}"></i>

                                    </div>

                                    <div>

                                        <h4>
                                            {{ $item[1] }}
                                        </h4>

                                        <p>
                                            Wilayah Desa Sirnamekar
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= PETA GIS ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-4">

                <span class="section-label">
                    Peta Digital Desa
                </span>

                <h2 class="section-title">
                    Peta GIS &
                    <span>Rawan Bencana</span>
                </h2>

                <p class="gis-description">

                    Peta Desa Sirnamekar menampilkan
                    informasi wilayah dan titik rawan
                    bencana seperti longsor dan banjir.

                </p>


                <div class="gis-legend-list">

                    <div>
                        <span class="legend-triangle red"></span>
                        Rawan Longsor
                    </div>

                    <div>
                        <span class="legend-triangle blue"></span>
                        Rawan Banjir
                    </div>

                    <div>
                        <span class="legend-triangle green"></span>
                        Jalur Evakuasi
                    </div>

                    <div>
                        <span class="legend-triangle orange"></span>
                        Kebakaran Hutan
                    </div>

                </div>


                <a href="{{ url('/peta-gis') }}"
                   class="btn-main">

                    <i class="bi bi-map-fill"></i>

                    Buka Peta Lengkap

                </a>

            </div>


            <div class="col-lg-8">

                <div class="peta-card">

                    <div class="peta-header">

                        <div>

                            <h5>
                                <i class="bi bi-map-fill"></i>
                                Peta Interaktif Desa Sirnamekar
                            </h5>

                            <small>
                                Informasi lokasi rawan bencana
                            </small>

                        </div>

                        <a href="{{ url('/peta-gis') }}"
                           class="peta-link">

                            Peta Penuh

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>


                    <div id="peta-beranda"></div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= PEMERINTAHAN ================= --}}
<section class="government-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label government-label">
                Pemerintahan Desa
            </span>

            <h2 class="section-title text-white">
                Pemerintah Desa
                <span>Sirnamekar</span>
            </h2>

            <p class="government-description">
                Mengenal perangkat Pemerintah Desa Sirnamekar
                dan struktur pemerintahan desa.
            </p>

        </div>


        <div class="row justify-content-center g-4">

            <div class="col-md-4 col-lg-3">

                <div class="official-card">

                    <div class="official-photo">

                        <img
                            src="{{ asset('images/kepala-desa.jpg') }}"
                            alt="Kepala Desa">

                    </div>

                    <div class="jabatan">
                        Kepala Desa
                    </div>

                    <h4>
                        Ajat Sudrajat
                    </h4>

                </div>

            </div>


            <div class="col-md-4 col-lg-3">

                <div class="official-card">

                    <div class="official-photo">

                        <img
                            src="{{ asset('images/sekretaris-desa.jpg') }}"
                            alt="Sekretaris Desa">

                    </div>

                    <div class="jabatan">
                        Sekretaris Desa
                    </div>

                    <h4>
                        Aang Suryana, S.Pd.I
                    </h4>

                </div>

            </div>

        </div>


        <div class="text-center mt-5">

            <a
                href="{{ url('/pemerintahan') }}"
                class="btn-light-custom">

                <i class="bi bi-diagram-3-fill"></i>

                Lihat Struktur Pemerintahan

            </a>

        </div>

    </div>

</section>


{{-- ================= POTENSI ================= --}}
<section class="section-space potential-home">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="home-potential-image">

                    <img
                        src="{{ asset('images/gula-kelapa.jpg') }}"
                        alt="Gula Kelapa Desa Sirnamekar">

                    <div class="potential-floating">

                        <span>Potensi Unggulan</span>

                        <strong>
                            Gula Kelapa
                        </strong>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <span class="section-label">
                    POTENSI DESA
                </span>

                <h2 class="section-title">
                    Kelapa sebagai
                    <span>Potensi Unggulan</span>
                </h2>

                <p class="home-potential-text">

                    Sebagian masyarakat Desa Sirnamekar bekerja
                    sebagai penyadap kelapa dan mengolah nira
                    menjadi gula kelapa.

                </p>

                <p class="home-potential-text">

                    Potensi ini dapat terus dikembangkan melalui
                    peningkatan kualitas produk, pengemasan,
                    promosi, dan pemasaran.

                </p>

                <a href="{{ url('/potensi') }}"
                   class="btn-potential">

                    Lihat Potensi Desa

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>


{{-- ================= BERITA ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                INFORMASI
            </span>

            <h2 class="section-title">
                Berita &
                <span>Kegiatan Desa</span>
            </h2>

            <p>
                Informasi terbaru mengenai kegiatan dan
                perkembangan Desa Sirnamekar.
            </p>

        </div>


        <div class="row g-4 mt-2">

            <div class="col-md-4">

                <div class="home-news-card">

                    <div class="home-news-icon">
                        📰
                    </div>

                    <span>
                        Berita Desa
                    </span>

                    <h4>
                        Informasi Kegiatan Desa
                    </h4>

                    <p>
                        Informasi kegiatan terbaru
                        Pemerintah Desa Sirnamekar.
                    </p>

                    <a href="{{ url('/berita') }}">
                        Baca Berita
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="home-news-card">

                    <div class="home-news-icon">
                        📷
                    </div>

                    <span>
                        Dokumentasi
                    </span>

                    <h4>
                        Kegiatan Masyarakat
                    </h4>

                    <p>
                        Dokumentasi kegiatan masyarakat
                        Desa Sirnamekar.
                    </p>

                    <a href="{{ url('/galeri') }}">
                        Lihat Galeri
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>


            <div class="col-md-4">

                <div class="home-news-card">

                    <div class="home-news-icon">
                        📍
                    </div>

                    <span>
                        Lokasi Desa
                    </span>

                    <h4>
                        Informasi dan Kontak
                    </h4>

                    <p>
                        Informasi mengenai lokasi dan
                        kontak Pemerintah Desa.
                    </p>

                    <a href="{{ url('/kontak') }}">
                        Hubungi Desa
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= KONTAK ================= --}}
<section class="contact-section">

    <div class="container position-relative">

        <div class="row align-items-center g-4">

            <div class="col-lg-7">

                <h2>
                    Butuh Informasi dari
                    <br>
                    Pemerintah Desa?
                </h2>

                <p>
                    Silakan menghubungi Pemerintah Desa Sirnamekar
                    untuk mendapatkan informasi dan pelayanan lebih lanjut.
                </p>

            </div>


            <div class="col-lg-5 text-lg-end">

                <a
                    href="{{ url('/kontak') }}"
                    class="btn-contact-light">

                    <i class="bi bi-envelope-fill"></i>

                    Hubungi Desa

                </a>

            </div>

        </div>

    </div>

</section>

@endsection


@section('scripts')

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>

const titikRawan = [

    {
        nama:"Informasi Kawasan Rawan Banjir",
        lat:-7.272217,
        lng:106.765665,
        foto:"https://drive.google.com/thumbnail?id=1qUFb3nZTRALFdLXdCymG-16vFnk0yuoS&sz=w400",
        maps:"https://maps.app.goo.gl/3YWqBQtaWjXvJTtE7",
        warna:"#3498db"
    },

    {
        nama:"Informasi Kawasan Rawan Longsor",
        lat:-7.270954,
        lng:106.769606,
        foto:"https://drive.google.com/thumbnail?id=12N0Z5tc_kJJd2qZsZIdK5XRTgrE12P3T&sz=w400",
        maps:"https://maps.app.goo.gl/Petnq8LXReCUtfDA7",
        warna:"#e74c3c"
    },

    {
        nama:"Hati-hati Longsoran Batu 2",
        lat:-7.278703,
        lng:106.760398,
        foto:"https://drive.google.com/thumbnail?id=1j-D0eD8Laswsynemn8IzOTDqJMAD91S3&sz=w400",
        maps:"https://maps.app.goo.gl/dSz6YvpwEu9MnWve8",
        warna:"#e74c3c"
    },

    {
        nama:"Hati-hati Longsoran Batu 1",
        lat:-7.272217,
        lng:106.765665,
        foto:"https://drive.google.com/thumbnail?id=1QOF5ZDoUOuc5A2aL-xOceeh4c3TvGRuT&sz=w400",
        maps:"https://maps.app.goo.gl/PDq9i7hBkbDuHJEW9",
        warna:"#e74c3c"
    },

    {
        nama:"Hati-hati Longsoran Batu 3",
        lat:-7.282671,
        lng:106.747524,
        foto:"https://drive.google.com/thumbnail?id=1e11YY_j5zyDjvbmq2wrKAg4Tpx7pgcwz&sz=w400",
        maps:"https://maps.app.goo.gl/TjFBRe9FRY8qzhvK6",
        warna:"#e74c3c"
    },

    {
        nama:"Hati-hati Banjir Bandang",
        lat:-7.283284,
        lng:106.746135,
        foto:"https://drive.google.com/thumbnail?id=1pkOljfzcYxideNNH96ZoocoWr2cHW6Uv&sz=w400",
        maps:"https://maps.app.goo.gl/NhEVZRTiTkntRhSg8",
        warna:"#3498db"
    },

    {
        nama:"Hati-hati Kebakaran Hutan",
        lat:-7.282716,
        lng:106.749598,
        foto:"https://drive.google.com/thumbnail?id=1IQGb9kOorMCrFvIyjxiOi-GChTAViWib&sz=w400",
        maps:"https://maps.app.goo.gl/XDKBwfYpJ9DpGV89",
        warna:"#e67e22"
    },

    {
        nama:"Evakuasi 1",
        lat:-7.279754,
        lng:106.753544,
        foto:"https://drive.google.com/thumbnail?id=1aT0IJCnPd3BPNCVsUGo-yqz3jsH21XO-&sz=w400",
        maps:"https://maps.app.goo.gl/6ZhY7kUMWsRvXxW76",
        warna:"#27ae60"
    },

    {
        nama:"Evakuasi 2",
        lat:-7.279732,
        lng:106.752233,
        foto:"https://drive.google.com/thumbnail?id=1bjPtWhqHsAqEDGy5H5PbpFgq-gSgsz-D&sz=w400",
        maps:"https://maps.app.goo.gl/2PHMDeV6fZuLGrUt9",
        warna:"#27ae60"
    },

    {
        nama:"Titik Evakuasi",
        lat:-7.27882,
        lng:106.754525,
        foto:"https://drive.google.com/thumbnail?id=1-oc6QGnAzWtZYatKNztLjiP8sKLC-_UM&sz=w400",
        maps:"https://maps.app.goo.gl/1y5h1k7ak3K3oVwo6",
        warna:"#8e44ad"
    }

];


const map = L.map('peta-beranda', {

    center: [-7.278, 106.755],

    zoom: 13,

    zoomControl: true

});


L.tileLayer(

    'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',

    {
        attribution: 'Tiles © Esri',

        maxZoom: 19
    }

).addTo(map);


function buatIkon(warna) {

    return L.divIcon({

        className: '',

        html:
            '<div class="gis-marker" style="border-bottom-color:' +
            warna +
            ';"></div>',

        iconSize: [18,20],

        iconAnchor: [9,20],

        popupAnchor: [0,-22]

    });

}


titikRawan.forEach(function(t) {

    const marker = L.marker(

        [t.lat, t.lng],

        {
            icon: buatIkon(t.warna)
        }

    );


    const fotoHtml =

        '<img class="p-foto" src="' +
        t.foto +
        '" onerror="this.outerHTML=\'<div class=p-nofoto>🏔️</div>\'">';


    marker.bindPopup(

        fotoHtml +

        '<div class="p-body">' +

            '<div class="p-judul">' +
                t.nama +
            '</div>' +

            '<a href="' +
                t.maps +
                '" target="_blank" class="p-btn">' +

                '📍 Google Maps' +

            '</a>' +

        '</div>',

        {
            maxWidth: 240
        }

    );


    marker.addTo(map);

});

</script>

@endsection