@extends('layouts.app')

@section('title', 'Galeri Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="galeri-hero">

    <div class="galeri-overlay"></div>

    <div class="container position-relative">

        <div class="galeri-hero-content">

            <span class="galeri-badge">
                Galeri Desa
            </span>

            <h1>Galeri Desa Sirnamekar</h1>

            <p>
                Dokumentasi kegiatan pemerintahan, masyarakat,
                potensi desa, pembangunan, dan berbagai aktivitas
                di Desa Sirnamekar.
            </p>

            <div class="galeri-breadcrumb">
                <a href="{{ url('/') }}">Beranda</a>
                <i class="bi bi-chevron-right"></i>
                <span>Galeri</span>
            </div>

        </div>

    </div>

</section>


{{-- ================= GALERI ================= --}}
<section class="galeri-section">

    <div class="container">

        <div class="galeri-heading text-center">

            <span class="section-label">
                DOKUMENTASI DESA
            </span>

            <h2>
                Jelajahi Kegiatan
                <span>Desa Sirnamekar</span>
            </h2>

            <p>
                Dokumentasi berbagai kegiatan dan potensi
                yang ada di Desa Sirnamekar.
            </p>

        </div>


        {{-- FILTER KATEGORI --}}
        <div class="galeri-filter">

            <button class="filter-btn active">
                Semua
            </button>

            <button class="filter-btn">
                Pemerintahan
            </button>

            <button class="filter-btn">
                Masyarakat
            </button>

            <button class="filter-btn">
                Potensi Desa
            </button>

            <button class="filter-btn">
                KKN
            </button>

        </div>


        {{-- ================= FOTO ================= --}}
        <div class="row g-4">

            {{-- FOTO 1 --}}
            <div class="col-md-6 col-lg-4">

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('images/galeri/kegiatan-desa.jpg') }}"
                            alt="Kegiatan Desa Sirnamekar"
                        >

                        <div class="galeri-hover">

                            <div>
                                <span>Kegiatan Desa</span>
                                <h3>Kegiatan Pemerintah Desa</h3>
                            </div>

                            <i class="bi bi-arrows-fullscreen"></i>

                        </div>

                    </div>

                </div>

            </div>


            {{-- FOTO 2 --}}
            <div class="col-md-6 col-lg-4">

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('images/galeri/gotong-royong.jpg') }}"
                            alt="Gotong Royong"
                        >

                        <div class="galeri-hover">

                            <div>
                                <span>Masyarakat</span>
                                <h3>Gotong Royong Masyarakat</h3>
                            </div>

                            <i class="bi bi-arrows-fullscreen"></i>

                        </div>

                    </div>

                </div>

            </div>


            {{-- FOTO 3 --}}
            <div class="col-md-6 col-lg-4">

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('images/galeri/gula-kelapa.jpg') }}"
                            alt="Gula Kelapa Sirnamekar"
                        >

                        <div class="galeri-hover">

                            <div>
                                <span>Potensi Desa</span>
                                <h3>Produksi Gula Kelapa</h3>
                            </div>

                            <i class="bi bi-arrows-fullscreen"></i>

                        </div>

                    </div>

                </div>

            </div>


            {{-- FOTO 4 --}}
            <div class="col-md-6 col-lg-4">

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('images/galeri/perkebunan.jpg') }}"
                            alt="Perkebunan Kelapa"
                        >

                        <div class="galeri-hover">

                            <div>
                                <span>Potensi Desa</span>
                                <h3>Perkebunan Kelapa</h3>
                            </div>

                            <i class="bi bi-arrows-fullscreen"></i>

                        </div>

                    </div>

                </div>

            </div>


            {{-- FOTO 5 --}}
            <div class="col-md-6 col-lg-4">

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('images/galeri/kkn.jpg') }}"
                            alt="Kegiatan KKN"
                        >

                        <div class="galeri-hover">

                            <div>
                                <span>KKN</span>
                                <h3>Kegiatan KKN Desa Sirnamekar</h3>
                            </div>

                            <i class="bi bi-arrows-fullscreen"></i>

                        </div>

                    </div>

                </div>

            </div>


            {{-- FOTO 6 --}}
            <div class="col-md-6 col-lg-4">

                <div class="galeri-card">

                    <div class="galeri-image">

                        <img
                            src="{{ asset('images/galeri/pemetaan.jpg') }}"
                            alt="Pemetaan Desa"
                        >

                        <div class="galeri-hover">

                            <div>
                                <span>Peta GIS</span>
                                <h3>Pemetaan Wilayah Desa</h3>
                            </div>

                            <i class="bi bi-arrows-fullscreen"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= CTA ================= --}}
<section class="galeri-cta">

    <div class="container">

        <div class="galeri-cta-box">

            <div>

                <span>DESA SIRNAMEKAR</span>

                <h2>
                    Dokumentasi dan Informasi Desa
                </h2>

                <p>
                    Ikuti perkembangan kegiatan dan informasi
                    terbaru Desa Sirnamekar.
                </p>

            </div>

            <a href="{{ url('/berita') }}" class="galeri-cta-btn">
                Lihat Berita
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>

@endsection