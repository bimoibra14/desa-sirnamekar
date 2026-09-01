@extends('layouts.app')

@section('title', 'Pemerintahan Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/pemerintahan.css') }}">
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="gov-hero">

    <div class="gov-hero-overlay"></div>

    <div class="container position-relative">

        <div class="gov-hero-content">

            <span class="gov-hero-badge">
                Pemerintahan Desa
            </span>

            <h1>
                Pemerintah Desa Sirnamekar
            </h1>

            <p>
                Mengenal struktur organisasi dan perangkat Pemerintah
                Desa Sirnamekar, Kecamatan Tegalbuleud,
                Kabupaten Sukabumi.
            </p>

            <div class="gov-breadcrumb">

                <a href="{{ url('/') }}">
                    Beranda
                </a>

                <i class="bi bi-chevron-right"></i>

                <span>
                    Pemerintahan
                </span>

            </div>

        </div>

    </div>

</section>


{{-- ================= INTRO ================= --}}
<section class="section-space">

    <div class="container">

        <div class="gov-intro text-center">

            <span class="section-label">
                PEMERINTAHAN DESA
            </span>

            <h2 class="section-title">
                Struktur Pemerintahan
                <span>Desa Sirnamekar</span>
            </h2>

            <p>
                Pemerintah Desa Sirnamekar menjalankan fungsi
                pemerintahan, pelayanan masyarakat, pembangunan,
                pembinaan serta pemberdayaan masyarakat desa.
            </p>

        </div>

    </div>

</section>


{{-- ================= KEPALA DESA ================= --}}
<section class="leader-section">

    <div class="container">

        <div class="leader-card">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <div class="leader-photo">

                        <img
                            src="{{ asset('images/kepala-desa.jpg') }}"
                            alt="Kepala Desa Sirnamekar"
                        >

                        <span>
                            Kepala Desa
                        </span>

                    </div>

                </div>


                <div class="col-lg-7">

                    <span class="section-label">
                        KEPALA DESA
                    </span>

                    <h2>
                        Ajat Sudrajat
                    </h2>

                    <p>
                        Kepala Desa memimpin penyelenggaraan
                        pemerintahan Desa Sirnamekar dan bertanggung jawab
                        dalam pelayanan masyarakat, pembangunan,
                        pembinaan serta pemberdayaan masyarakat.
                    </p>

                    <div class="leader-info">

                        <div class="leader-info-item">

                            <div class="leader-info-icon">
                                <i class="bi bi-person-badge-fill"></i>
                            </div>

                            <div>
                                <small>Jabatan</small>
                                <strong>Kepala Desa Sirnamekar</strong>
                            </div>

                        </div>


                        <div class="leader-info-item">

                            <div class="leader-info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>

                            <div>
                                <small>Wilayah</small>
                                <strong>
                                    Sirnamekar, Tegalbuleud
                                </strong>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= SEKRETARIS ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                SEKRETARIAT DESA
            </span>

            <h2 class="section-title">
                Sekretaris Desa
            </h2>

            <p>
                Sekretaris Desa membantu Kepala Desa dalam
                pengelolaan administrasi pemerintahan desa.
            </p>

        </div>


        <div class="row justify-content-center mt-4">

            <div class="col-md-7 col-lg-4">

                <div class="person-card">

                    <div class="person-photo">

                        <img
                            src="{{ asset('images/sekretaris-desa.jpg') }}"
                            alt="Sekretaris Desa Sirnamekar"
                        >

                    </div>

                    <span>
                        Sekretaris Desa
                    </span>

                    <h3>
                        Aang Suryana, S.Pd.I
                    </h3>

                    <p>
                        Membantu Kepala Desa dalam urusan administrasi
                        Pemerintah Desa Sirnamekar.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= PERANGKAT DESA ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                PERANGKAT DESA
            </span>

            <h2 class="section-title">
                Pelaksana Pemerintahan Desa
            </h2>

            <p>
                Perangkat desa membantu Kepala Desa
                dalam penyelenggaraan pelayanan
                dan administrasi pemerintahan.
            </p>

        </div>


        @php
            $perangkat = [

                [
                    'jabatan' => 'Kasi Pemerintahan',
                    'nama' => 'Uup Padiansyah, S.IP',
                    'icon' => 'bi-building-fill'
                ],

                [
                    'jabatan' => 'Kasi Pelayanan',
                    'nama' => 'Saprudin, S.Pd.I',
                    'icon' => 'bi-person-check-fill'
                ],

                [
                    'jabatan' => 'Kasi Kesejahteraan',
                    'nama' => 'Abdul Mujib, S.IP',
                    'icon' => 'bi-people-fill'
                ],

                [
                    'jabatan' => 'Kaur Tata Usaha',
                    'nama' => 'Kholid',
                    'icon' => 'bi-folder-fill'
                ],

                [
                    'jabatan' => 'Kaur Keuangan',
                    'nama' => 'Pikri, S.Pd',
                    'icon' => 'bi-cash-stack'
                ],

                [
                    'jabatan' => 'Kaur Perencanaan',
                    'nama' => 'Endang Trayana, S.IP',
                    'icon' => 'bi-bar-chart-fill'
                ]

            ];
        @endphp


        <div class="row g-4 mt-4">

            @foreach($perangkat as $item)

                <div class="col-md-6 col-lg-4">

                    <div class="apparatus-card">

                        <div class="apparatus-icon">
                            <i class="bi {{ $item['icon'] }}"></i>
                        </div>

                        <span>
                            {{ $item['jabatan'] }}
                        </span>

                        <h4>
                            {{ $item['nama'] }}
                        </h4>

                        <p>
                            Perangkat Pemerintah Desa Sirnamekar.
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ================= KEPALA DUSUN ================= --}}
<section class="section-space bg-soft">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                WILAYAH DUSUN
            </span>

            <h2 class="section-title">
                Kepala Dusun Desa Sirnamekar
            </h2>

            <p>
                Desa Sirnamekar terdiri dari empat wilayah dusun.
            </p>

        </div>


        @php
            $kadus = [

                [
                    'nomor' => '01',
                    'nama' => 'Enyang',
                    'dusun' => 'Dusun Cijoho'
                ],

                [
                    'nomor' => '02',
                    'nama' => 'Yandi',
                    'dusun' => 'Dusun Babakan Sirna'
                ],

                [
                    'nomor' => '03',
                    'nama' => 'Awaludin Lubis',
                    'dusun' => 'Dusun Puncak Pari'
                ],

                [
                    'nomor' => '04',
                    'nama' => 'Saripudin',
                    'dusun' => 'Dusun Cipanengah'
                ]

            ];
        @endphp


        <div class="row g-4 mt-4">

            @foreach($kadus as $item)

                <div class="col-md-6 col-lg-3">

                    <div class="kadus-card">

                        <span class="kadus-number">
                            {{ $item['nomor'] }}
                        </span>

                        <div class="kadus-avatar">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <span class="kadus-label">
                            Kepala Dusun
                        </span>

                        <h4>
                            {{ $item['nama'] }}
                        </h4>

                        <p>
                            {{ $item['dusun'] }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ================= BPD LPM ================= --}}
<section class="section-space institution-section">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label light">
                LEMBAGA DESA
            </span>

            <h2 class="section-title text-white">
                Lembaga Desa
            </h2>

            <p class="text-white-50">
                Lembaga desa mendukung penyelenggaraan
                pemerintahan dan pemberdayaan masyarakat.
            </p>

        </div>


        <div class="row justify-content-center g-4 mt-4">

            <div class="col-md-6 col-lg-4">

                <div class="institution-card">

                    <div class="institution-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h4>
                        BPD
                    </h4>

                    <p>
                        Badan Permusyawaratan Desa.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-4">

                <div class="institution-card">

                    <div class="institution-icon">
                        <i class="bi bi-diagram-3-fill"></i>
                    </div>

                    <h4>
                        LPM
                    </h4>

                    <p>
                        Lembaga Pemberdayaan Masyarakat.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= BAGAN ORGANISASI ================= --}}
<section class="section-space">

    <div class="container">

        <div class="section-heading text-center">

            <span class="section-label">
                STRUKTUR ORGANISASI
            </span>

            <h2 class="section-title">
                Bagan Pemerintahan Desa
            </h2>

            <p>
                Struktur organisasi Pemerintah Desa Sirnamekar.
            </p>

        </div>


        <div class="org-chart-wrapper mt-5">

            <div class="org-level top-level">

                <div class="org-side-card">
                    BPD
                </div>


                <div class="org-main-card">

                    <small>
                        Kepala Desa
                    </small>

                    <strong>
                        Ajat Sudrajat
                    </strong>

                </div>


                <div class="org-side-card">
                    LPM
                </div>

            </div>


            <div class="org-vertical-line"></div>


            <div class="org-level">

                <div class="org-main-card secondary">

                    <small>
                        Sekretaris Desa
                    </small>

                    <strong>
                        Aang Suryana, S.Pd.I
                    </strong>

                </div>

            </div>


            <div class="org-vertical-line"></div>


            <div class="org-group-title">
                Pelaksana Teknis
            </div>


            <div class="org-grid three-column">

                <div class="org-detail-card">

                    <small>
                        Kasi Pemerintahan
                    </small>

                    <strong>
                        Uup Padiansyah, S.IP
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Kasi Pelayanan
                    </small>

                    <strong>
                        Saprudin, S.Pd.I
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Kasi Kesejahteraan
                    </small>

                    <strong>
                        Abdul Mujib, S.IP
                    </strong>

                </div>

            </div>


            <div class="org-divider"></div>


            <div class="org-grid three-column">

                <div class="org-detail-card">

                    <small>
                        Kaur Tata Usaha
                    </small>

                    <strong>
                        Kholid
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Kaur Keuangan
                    </small>

                    <strong>
                        Pikri, S.Pd
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Kaur Perencanaan
                    </small>

                    <strong>
                        Endang Trayana, S.IP
                    </strong>

                </div>

            </div>


            <div class="org-divider"></div>


            <div class="org-group-title">
                Kepala Dusun
            </div>


            <div class="org-grid four-column">

                <div class="org-detail-card">

                    <small>
                        Dusun Cijoho
                    </small>

                    <strong>
                        Enyang
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Dusun Babakan Sirna
                    </small>

                    <strong>
                        Yandi
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Dusun Puncak Pari
                    </small>

                    <strong>
                        Awaludin Lubis
                    </strong>

                </div>


                <div class="org-detail-card">

                    <small>
                        Dusun Cipanengah
                    </small>

                    <strong>
                        Saripudin
                    </strong>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= CTA ================= --}}
<section class="gov-contact-section">

    <div class="container">

        <div class="gov-contact-box">

            <div>

                <span>
                    PELAYANAN DESA
                </span>

                <h2>
                    Membutuhkan Informasi dari Pemerintah Desa?
                </h2>

                <p>
                    Hubungi Pemerintah Desa Sirnamekar
                    untuk informasi dan pelayanan masyarakat.
                </p>

            </div>


            <a
                href="{{ url('/kontak') }}"
                class="gov-contact-btn"
            >

                <i class="bi bi-chat-dots-fill"></i>

                Hubungi Desa

            </a>

        </div>

    </div>

</section>

@endsection