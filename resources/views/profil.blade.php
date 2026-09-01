@extends('layouts.app')

@section('title', 'Profil Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@endsection

@section('content')

{{-- ================= HERO PROFIL ================= --}}
<section class="profile-hero">

    <div class="profile-hero-overlay"></div>

    <div class="container position-relative">

        <div class="profile-hero-content">

            <span class="profile-hero-badge">
                Profil Desa
            </span>

            <h1>
                Mengenal Desa Sirnamekar
            </h1>

            <p>
                Kecamatan Tegalbuleud • Kabupaten Sukabumi • Jawa Barat
            </p>

            <div class="profile-breadcrumb">

                <a href="{{ url('/') }}">
                    Beranda
                </a>

                <i class="bi bi-chevron-right"></i>

                <span>
                    Profil Desa
                </span>

            </div>

        </div>

    </div>

</section>


{{-- ================= GAMBARAN UMUM ================= --}}
<section class="section-space">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="profile-page-image">

                    <img
                        src="{{ asset('images/desa-sirnamekar.jpg') }}"
                        alt="Desa Sirnamekar"
                    >

                    <div class="profile-page-badge">

                        <i class="bi bi-geo-alt-fill"></i>

                        <div>
                            <strong>Desa Sirnamekar</strong>
                            <small>Tegalbuleud, Sukabumi</small>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <span class="section-label">
                    GAMBARAN UMUM
                </span>

                <h2 class="section-title">
                    Tentang Desa
                    <span>Sirnamekar</span>
                </h2>

                <p class="section-description">
                    Desa Sirnamekar merupakan salah satu desa yang berada
                    di Kecamatan Tegalbuleud, Kabupaten Sukabumi,
                    Provinsi Jawa Barat.
                </p>

                <p class="section-description">
                    Desa ini terbentuk sebagai hasil pemekaran dari
                    Desa Bangbayang berdasarkan Peraturan Daerah
                    Kabupaten Sukabumi Nomor 5 Tahun 2006.
                </p>

                <p class="section-description">
                    Desa Sirnamekar memiliki empat wilayah dusun dan
                    mempunyai potensi masyarakat yang kuat pada sektor
                    perkebunan kelapa serta produksi gula kelapa.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= SEJARAH ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="profile-story-box">

            <div class="row g-5">

                <div class="col-lg-4">

                    <span class="section-label">
                        SEJARAH DESA
                    </span>

                    <h2 class="section-title">
                        Perjalanan Desa
                        <span>Sirnamekar</span>
                    </h2>

                </div>


                <div class="col-lg-8">

                    <div class="history-timeline">

                        <div class="history-item">

                            <div class="history-year">
                                2006
                            </div>

                            <div class="history-content">

                                <h4>
                                    Pembentukan Desa Sirnamekar
                                </h4>

                                <p>
                                    Desa Sirnamekar terbentuk sebagai hasil
                                    pemekaran dari Desa Bangbayang berdasarkan
                                    Peraturan Daerah Kabupaten Sukabumi
                                    Nomor 5 Tahun 2006.
                                </p>

                            </div>

                        </div>


                        <div class="history-item">

                            <div class="history-year">
                                Kini
                            </div>

                            <div class="history-content">

                                <h4>
                                    Perkembangan Desa
                                </h4>

                                <p>
                                    Desa Sirnamekar terus berkembang dalam
                                    pelayanan pemerintahan, pembangunan wilayah,
                                    pengembangan potensi masyarakat serta
                                    pemanfaatan teknologi informasi.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= VISI MISI ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                ARAH PEMBANGUNAN
            </span>

            <h2 class="section-title">
                Visi & Misi Desa
            </h2>

            <p>
                Bagian ini dapat diisi menggunakan visi dan misi resmi
                Pemerintah Desa Sirnamekar.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-lg-5">

                <div class="vision-card">

                    <div class="vision-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>

                    <span>
                        VISI
                    </span>

                    <h3>
                        Visi Desa Sirnamekar
                    </h3>

                    <p>
                        Data visi resmi desa belum tersedia.
                        Silakan isi berdasarkan dokumen resmi
                        Pemerintah Desa Sirnamekar.
                    </p>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="mission-card">

                    <div class="mission-title">

                        <div class="vision-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>

                        <div>
                            <span>MISI</span>
                            <h3>Misi Desa Sirnamekar</h3>
                        </div>

                    </div>


                    <div class="mission-list">

                        <div class="mission-item">
                            <i class="bi bi-check-circle-fill"></i>

                            <p>
                                Data misi resmi desa belum tersedia.
                            </p>
                        </div>

                        <div class="mission-item">
                            <i class="bi bi-check-circle-fill"></i>

                            <p>
                                Isi bagian ini berdasarkan dokumen
                                resmi desa setelah diperoleh.
                            </p>
                        </div>

                        <div class="mission-item">
                            <i class="bi bi-check-circle-fill"></i>

                            <p>
                                Hindari memasukkan misi yang belum
                                dikonfirmasi oleh pemerintah desa.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= WILAYAH DUSUN ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                WILAYAH ADMINISTRASI
            </span>

            <h2 class="section-title">
                Empat Dusun Desa Sirnamekar
            </h2>

            <p>
                Desa Sirnamekar terbagi menjadi empat wilayah dusun.
            </p>

        </div>


        @php
            $dusun = [
                [
                    'nomor' => '01',
                    'nama' => 'Dusun Cijoho',
                    'icon' => 'bi-house-door-fill'
                ],
                [
                    'nomor' => '02',
                    'nama' => 'Dusun Babakan Sirna',
                    'icon' => 'bi-house-door-fill'
                ],
                [
                    'nomor' => '03',
                    'nama' => 'Dusun Puncak Pari',
                    'icon' => 'bi-house-door-fill'
                ],
                [
                    'nomor' => '04',
                    'nama' => 'Dusun Cipanengah',
                    'icon' => 'bi-house-door-fill'
                ]
            ];
        @endphp


        <div class="row g-4 mt-4">

            @foreach($dusun as $item)

                <div class="col-md-6 col-lg-3">

                    <div class="profile-dusun-card">

                        <span class="profile-dusun-number">
                            {{ $item['nomor'] }}
                        </span>

                        <div class="profile-dusun-icon">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </div>

                        <h4>
                            {{ $item['nama'] }}
                        </h4>

                        <p>
                            Salah satu wilayah administratif
                            Desa Sirnamekar.
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ================= GEOGRAFIS ================= --}}
<section class="section-space">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5">

                <span class="section-label">
                    KONDISI WILAYAH
                </span>

                <h2 class="section-title">
                    Kondisi
                    <span>Geografis</span>
                </h2>

                <p class="section-description">
                    Data geografis berikut sebaiknya menggunakan
                    data resmi dari Pemerintah Desa Sirnamekar.
                </p>

                <p class="section-description">
                    Informasi seperti luas wilayah, batas desa,
                    ketinggian, jumlah RT/RW serta penggunaan lahan
                    dapat ditambahkan setelah data resmi tersedia.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="geography-grid">

                    <div class="geo-card">

                        <i class="bi bi-rulers"></i>

                        <span>
                            Luas Wilayah
                        </span>

                        <strong>
                            -
                        </strong>

                    </div>


                    <div class="geo-card">

                        <i class="bi bi-compass-fill"></i>

                        <span>
                            Batas Utara
                        </span>

                        <strong>
                            -
                        </strong>

                    </div>


                    <div class="geo-card">

                        <i class="bi bi-compass"></i>

                        <span>
                            Batas Selatan
                        </span>

                        <strong>
                            -
                        </strong>

                    </div>


                    <div class="geo-card">

                        <i class="bi bi-signpost-2-fill"></i>

                        <span>
                            Jumlah RT/RW
                        </span>

                        <strong>
                            -
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= POTENSI ================= --}}
<section class="section-space potential-profile-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img
                    src="{{ asset('images/gula-kelapa.jpg') }}"
                    class="potential-profile-image"
                    alt="Potensi Gula Kelapa Desa Sirnamekar"
                >

            </div>


            <div class="col-lg-6">

                <span class="section-label light">
                    POTENSI DESA
                </span>

                <h2 class="section-title text-white">
                    Gula Kelapa sebagai
                    Potensi Unggulan
                </h2>

                <p class="potential-profile-text">
                    Salah satu potensi utama Desa Sirnamekar berasal
                    dari sektor perkebunan kelapa.
                </p>

                <p class="potential-profile-text">
                    Sebagian masyarakat bekerja sebagai penyadap kelapa
                    dan memanfaatkan nira sebagai bahan utama untuk
                    memproduksi gula kelapa.
                </p>

                <a href="{{ url('/potensi') }}"
                   class="btn-light-custom">

                    Lihat Potensi Desa

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>


{{-- ================= DATA DESA ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                DATA DESA
            </span>

            <h2 class="section-title">
                Data Kependudukan
            </h2>

            <p>
                Statistik dapat diperbarui setelah data resmi
                Pemerintah Desa tersedia.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-6 col-lg-3">

                <div class="profile-stat-card">

                    <div class="profile-stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h3>-</h3>

                    <p>
                        Jumlah Penduduk
                    </p>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="profile-stat-card">

                    <div class="profile-stat-icon">
                        <i class="bi bi-person-vcard-fill"></i>
                    </div>

                    <h3>-</h3>

                    <p>
                        Kepala Keluarga
                    </p>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="profile-stat-card">

                    <div class="profile-stat-icon">
                        <i class="bi bi-gender-male"></i>
                    </div>

                    <h3>-</h3>

                    <p>
                        Laki-laki
                    </p>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="profile-stat-card">

                    <div class="profile-stat-icon">
                        <i class="bi bi-gender-female"></i>
                    </div>

                    <h3>-</h3>

                    <p>
                        Perempuan
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= CTA PEMERINTAHAN ================= --}}
<section class="profile-government-cta">

    <div class="container">

        <div class="profile-government-box">

            <div>

                <span>
                    PEMERINTAHAN DESA
                </span>

                <h2>
                    Kenali Struktur Pemerintahan
                    Desa Sirnamekar
                </h2>

                <p>
                    Lihat Kepala Desa, Sekretaris Desa,
                    perangkat desa serta Kepala Dusun.
                </p>

            </div>


            <a
                href="{{ url('/pemerintahan') }}"
                class="btn-profile-government"
            >

                Lihat Pemerintahan

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</section>

@endsection