@extends('layouts.app')

@section('title', 'Potensi Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/potensi.css') }}">
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="potential-hero">

    <div class="potential-hero-overlay"></div>

    <div class="container position-relative">

        <div class="potential-hero-content">

            <span class="potential-badge">
                Potensi Desa
            </span>

            <h1>
                Potensi Unggulan Desa Sirnamekar
            </h1>

            <p>
                Mengenal potensi alam dan ekonomi masyarakat
                Desa Sirnamekar, Kecamatan Tegalbuleud,
                Kabupaten Sukabumi.
            </p>

            <div class="potential-breadcrumb">

                <a href="{{ url('/') }}">
                    Beranda
                </a>

                <i class="bi bi-chevron-right"></i>

                <span>
                    Potensi Desa
                </span>

            </div>

        </div>

    </div>

</section>


{{-- ================= INTRO ================= --}}
<section class="section-space">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="potential-main-image">

                    <img
                        src="{{ asset('images/gula-kelapa.jpg') }}"
                        alt="Gula Kelapa Desa Sirnamekar"
                    >

                    <div class="potential-image-label">

                        <i class="bi bi-tree-fill"></i>

                        <div>
                            <strong>Potensi Unggulan</strong>
                            <small>Perkebunan Kelapa</small>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <span class="section-label">
                    POTENSI DESA
                </span>

                <h2 class="section-title">
                    Perkebunan Kelapa dan
                    <span>Gula Kelapa</span>
                </h2>

                <p class="section-description">
                    Desa Sirnamekar memiliki potensi pada sektor
                    perkebunan kelapa yang dimanfaatkan oleh masyarakat
                    sebagai salah satu sumber mata pencaharian.
                </p>

                <p class="section-description">
                    Sebagian masyarakat bekerja sebagai penyadap kelapa.
                    Nira yang diperoleh dari pohon kelapa kemudian
                    diolah secara tradisional menjadi gula kelapa.
                </p>

                <p class="section-description">
                    Produk gula kelapa menjadi salah satu hasil ekonomi
                    masyarakat Desa Sirnamekar yang memiliki nilai jual
                    dan potensi untuk terus dikembangkan.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= POTENSI UTAMA ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                POTENSI UTAMA
            </span>

            <h2 class="section-title">
                Potensi Ekonomi Masyarakat
            </h2>

            <p>
                Potensi Desa Sirnamekar didukung oleh kegiatan
                masyarakat yang berkaitan dengan perkebunan kelapa
                dan pengolahan hasilnya.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-md-6 col-lg-3">

                <div class="potential-feature-card featured">

                    <div class="potential-feature-icon">
                        <i class="bi bi-tree-fill"></i>
                    </div>

                    <h4>
                        Perkebunan Kelapa
                    </h4>

                    <p>
                        Pohon kelapa menjadi salah satu sumber
                        potensi perkebunan masyarakat desa.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="potential-feature-card">

                    <div class="potential-feature-icon">
                        <i class="bi bi-droplet-fill"></i>
                    </div>

                    <h4>
                        Penyadapan Nira
                    </h4>

                    <p>
                        Nira kelapa diperoleh melalui kegiatan
                        penyadapan yang dilakukan oleh masyarakat.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="potential-feature-card">

                    <div class="potential-feature-icon">
                        <i class="bi bi-basket-fill"></i>
                    </div>

                    <h4>
                        Gula Kelapa
                    </h4>

                    <p>
                        Nira kelapa diolah menjadi gula kelapa
                        sebagai produk lokal Desa Sirnamekar.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="potential-feature-card">

                    <div class="potential-feature-icon">
                        <i class="bi bi-shop"></i>
                    </div>

                    <h4>
                        Ekonomi Warga
                    </h4>

                    <p>
                        Kegiatan produksi gula kelapa turut mendukung
                        pendapatan masyarakat desa.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= PROSES PRODUKSI ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                PROSES PRODUKSI
            </span>

            <h2 class="section-title">
                Dari Nira Menjadi Gula Kelapa
            </h2>

            <p>
                Gambaran sederhana proses pengolahan nira kelapa
                menjadi gula kelapa oleh masyarakat.
            </p>

        </div>


        <div class="process-wrapper mt-5">

            <div class="process-card">

                <div class="process-number">
                    01
                </div>

                <div class="process-icon">
                    <i class="bi bi-tree-fill"></i>
                </div>

                <h4>
                    Pohon Kelapa
                </h4>

                <p>
                    Pohon kelapa dipilih untuk proses
                    penyadapan nira.
                </p>

            </div>


            <div class="process-arrow">
                <i class="bi bi-arrow-right"></i>
            </div>


            <div class="process-card">

                <div class="process-number">
                    02
                </div>

                <div class="process-icon">
                    <i class="bi bi-droplet-fill"></i>
                </div>

                <h4>
                    Penyadapan Nira
                </h4>

                <p>
                    Nira dikumpulkan dari hasil
                    penyadapan pohon kelapa.
                </p>

            </div>


            <div class="process-arrow">
                <i class="bi bi-arrow-right"></i>
            </div>


            <div class="process-card">

                <div class="process-number">
                    03
                </div>

                <div class="process-icon">
                    <i class="bi bi-fire"></i>
                </div>

                <h4>
                    Pengolahan
                </h4>

                <p>
                    Nira dimasak hingga mengalami
                    proses pengentalan.
                </p>

            </div>


            <div class="process-arrow">
                <i class="bi bi-arrow-right"></i>
            </div>


            <div class="process-card">

                <div class="process-number">
                    04
                </div>

                <div class="process-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </div>

                <h4>
                    Gula Kelapa
                </h4>

                <p>
                    Hasil akhir menjadi gula kelapa
                    yang siap digunakan atau dijual.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= PRODUK UNGGULAN ================= --}}
<section class="section-space product-highlight-section">

    <div class="container">

        <div class="product-highlight-box">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <img
                        src="{{ asset('images/gula-kelapa.jpg') }}"
                        alt="Produk Gula Kelapa"
                        class="product-highlight-image"
                    >

                </div>


                <div class="col-lg-7">

                    <span class="section-label light">
                        PRODUK UNGGULAN
                    </span>

                    <h2 class="section-title text-white">
                        Gula Kelapa Desa Sirnamekar
                    </h2>

                    <p>
                        Gula kelapa merupakan salah satu hasil olahan
                        masyarakat Desa Sirnamekar yang berasal dari
                        nira kelapa.
                    </p>

                    <p>
                        Produk ini memiliki potensi untuk dikembangkan
                        melalui peningkatan kualitas, pengemasan,
                        promosi serta pemasaran yang lebih luas.
                    </p>

                    <div class="product-benefit-list">

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            Produk lokal masyarakat
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            Berbasis potensi perkebunan desa
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            Mendukung ekonomi masyarakat
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= PELUANG PENGEMBANGAN ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                PENGEMBANGAN POTENSI
            </span>

            <h2 class="section-title">
                Peluang Pengembangan Desa
            </h2>

            <p>
                Beberapa aspek yang dapat mendukung pengembangan
                potensi gula kelapa Desa Sirnamekar.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-md-6 col-lg-4">

                <div class="development-card">

                    <i class="bi bi-box2-heart-fill"></i>

                    <h4>
                        Pengemasan Produk
                    </h4>

                    <p>
                        Pengemasan yang lebih baik dapat membantu
                        meningkatkan nilai jual produk gula kelapa.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-4">

                <div class="development-card">

                    <i class="bi bi-megaphone-fill"></i>

                    <h4>
                        Promosi Digital
                    </h4>

                    <p>
                        Website desa dapat dimanfaatkan sebagai
                        media promosi produk lokal masyarakat.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-4">

                <div class="development-card">

                    <i class="bi bi-cart-check-fill"></i>

                    <h4>
                        Pemasaran
                    </h4>

                    <p>
                        Pemasaran yang lebih luas dapat membuka
                        peluang ekonomi bagi masyarakat desa.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= CTA ================= --}}
<section class="potential-cta-section">

    <div class="container">

        <div class="potential-cta-box">

            <div>

                <span>
                    POTENSI DESA
                </span>

                <h2>
                    Kenali Lebih Dekat Desa Sirnamekar
                </h2>

                <p>
                    Temukan informasi wilayah dan lokasi desa
                    melalui Peta GIS Desa Sirnamekar.
                </p>

            </div>


            <a
                href="{{ url('/peta-gis') }}"
                class="potential-cta-btn"
            >

                <i class="bi bi-map-fill"></i>

                Lihat Peta GIS

            </a>

        </div>

    </div>

</section>

@endsection