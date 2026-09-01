@extends('layouts.app')

@section('title', 'Berita Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="news-hero">

    <div class="news-hero-overlay"></div>

    <div class="container position-relative">

        <div class="news-hero-content">

            <span class="news-hero-badge">
                Berita Desa
            </span>

            <h1>
                Berita Desa Sirnamekar
            </h1>

            <p>
                Informasi kegiatan, pelayanan, pembangunan,
                dan perkembangan terbaru Desa Sirnamekar.
            </p>

            <div class="news-breadcrumb">

                <a href="{{ url('/') }}">
                    Beranda
                </a>

                <i class="bi bi-chevron-right"></i>

                <span>
                    Berita
                </span>

            </div>

        </div>

    </div>

</section>


{{-- ================= BERITA UTAMA ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                INFORMASI TERBARU
            </span>

            <h2 class="section-title">
                Berita Terbaru Desa
            </h2>

            <p>
                Informasi kegiatan dan perkembangan terbaru
                Pemerintah Desa Sirnamekar.
            </p>

        </div>


        <div class="featured-news mt-5">

            <div class="row align-items-center g-0">

                <div class="col-lg-6">

                    <div class="featured-news-image">

                        <img
                            src="{{ asset('images/berita-default.jpg') }}"
                            alt="Berita Utama Desa Sirnamekar"
                        >

                        <span class="featured-category">
                            Berita Desa
                        </span>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="featured-news-content">

                        <div class="news-meta">

                            <span>
                                <i class="bi bi-calendar3"></i>
                                10 Agustus 2026
                            </span>

                            <span>
                                <i class="bi bi-person-fill"></i>
                                Admin Desa
                            </span>

                        </div>

                        <h2>
                            Informasi Kegiatan Terbaru
                            Desa Sirnamekar
                        </h2>

                        <p>
                            Berita ini dapat digunakan untuk menampilkan
                            kegiatan terbaru Pemerintah Desa Sirnamekar,
                            pelayanan masyarakat, pembangunan desa,
                            maupun kegiatan sosial masyarakat.
                        </p>

                        <a href="#" class="news-read-more">

                            Baca Selengkapnya

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= DAFTAR BERITA ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="news-section-header">

            <div>

                <span class="section-label">
                    BERITA DESA
                </span>

                <h2 class="section-title">
                    Semua Berita
                </h2>

            </div>


            <div class="news-search">

                <i class="bi bi-search"></i>

                <input
                    type="text"
                    placeholder="Cari berita..."
                >

            </div>

        </div>


        @php

            $berita = [

                [
                    'judul' => 'Kegiatan Pemerintah Desa Sirnamekar',
                    'tanggal' => '10 Agustus 2026',
                    'kategori' => 'Pemerintahan',
                    'gambar' => 'berita-default.jpg'
                ],

                [
                    'judul' => 'Kegiatan Gotong Royong Masyarakat Desa',
                    'tanggal' => '8 Agustus 2026',
                    'kategori' => 'Kegiatan Desa',
                    'gambar' => 'berita-default.jpg'
                ],

                [
                    'judul' => 'Pengembangan Potensi Gula Kelapa',
                    'tanggal' => '6 Agustus 2026',
                    'kategori' => 'Potensi Desa',
                    'gambar' => 'gula-kelapa.jpg'
                ],

                [
                    'judul' => 'Informasi Pelayanan Pemerintah Desa',
                    'tanggal' => '3 Agustus 2026',
                    'kategori' => 'Pelayanan',
                    'gambar' => 'berita-default.jpg'
                ],

                [
                    'judul' => 'Pemetaan Wilayah Rawan Bencana',
                    'tanggal' => '1 Agustus 2026',
                    'kategori' => 'Peta GIS',
                    'gambar' => 'peta-qgis-sirnamekar.jpg'
                ],

                [
                    'judul' => 'Kegiatan Masyarakat Desa Sirnamekar',
                    'tanggal' => '30 Juli 2026',
                    'kategori' => 'Masyarakat',
                    'gambar' => 'berita-default.jpg'
                ]

            ];

        @endphp


        <div class="row g-4 mt-3">

            @foreach($berita as $item)

                <div class="col-md-6 col-lg-4">

                    <article class="news-card">

                        <div class="news-card-image">

                            <img
                                src="{{ asset('images/' . $item['gambar']) }}"
                                alt="{{ $item['judul'] }}"
                            >

                            <span>
                                {{ $item['kategori'] }}
                            </span>

                        </div>


                        <div class="news-card-body">

                            <div class="news-card-date">

                                <i class="bi bi-calendar3"></i>

                                {{ $item['tanggal'] }}

                            </div>

                            <h3>
                                {{ $item['judul'] }}
                            </h3>

                            <p>
                                Informasi terbaru mengenai kegiatan
                                dan perkembangan Desa Sirnamekar.
                            </p>

                            <a href="#">

                                Baca Selengkapnya

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </div>

                    </article>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ================= PENGUMUMAN ================= --}}
<section class="section-space">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-7">

                <span class="section-label">
                    PENGUMUMAN
                </span>

                <h2 class="section-title">
                    Informasi Penting Desa
                </h2>


                <div class="announcement-list">

                    <div class="announcement-item">

                        <div class="announcement-icon">
                            <i class="bi bi-megaphone-fill"></i>
                        </div>

                        <div>

                            <small>
                                Pengumuman
                            </small>

                            <h4>
                                Informasi Pelayanan Kantor Desa
                            </h4>

                            <p>
                                Informasi mengenai pelayanan administrasi
                                masyarakat Desa Sirnamekar.
                            </p>

                        </div>

                    </div>


                    <div class="announcement-item">

                        <div class="announcement-icon">
                            <i class="bi bi-calendar-event-fill"></i>
                        </div>

                        <div>

                            <small>
                                Agenda Desa
                            </small>

                            <h4>
                                Kegiatan Masyarakat Desa
                            </h4>

                            <p>
                                Informasi kegiatan sosial dan kemasyarakatan
                                Desa Sirnamekar.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-5">

                <div class="news-info-box">

                    <div class="news-info-icon">
                        <i class="bi bi-newspaper"></i>
                    </div>

                    <h3>
                        Informasi Desa Terpercaya
                    </h3>

                    <p>
                        Halaman berita digunakan sebagai media
                        penyampaian informasi resmi Pemerintah Desa
                        kepada masyarakat.
                    </p>

                    <a
                        href="{{ url('/kontak') }}"
                        class="btn-global"
                    >

                        Hubungi Desa

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection