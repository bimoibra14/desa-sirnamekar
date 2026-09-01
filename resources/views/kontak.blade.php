@extends('layouts.app')

@section('title', 'Kontak Desa Sirnamekar')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endsection

@section('content')

{{-- ================= HERO ================= --}}
<section class="kontak-hero">

    <div class="kontak-overlay"></div>

    <div class="container position-relative">

        <div class="kontak-hero-content">

            <span class="kontak-badge">
                Kontak Desa
            </span>

            <h1>
                Hubungi Desa Sirnamekar
            </h1>

            <p>
                Hubungi Pemerintah Desa Sirnamekar untuk mendapatkan
                informasi mengenai pelayanan, administrasi, kegiatan,
                dan informasi desa lainnya.
            </p>

            <div class="kontak-breadcrumb">

                <a href="{{ url('/') }}">
                    Beranda
                </a>

                <i class="bi bi-chevron-right"></i>

                <span>Kontak</span>

            </div>

        </div>

    </div>

</section>


{{-- ================= INFORMASI KONTAK ================= --}}
<section class="kontak-section">

    <div class="container">

        <div class="kontak-heading text-center">

            <span class="section-label">
                HUBUNGI KAMI
            </span>

            <h2>
                Informasi Kontak
                <span>Desa Sirnamekar</span>
            </h2>

            <p>
                Pemerintah Desa Sirnamekar siap memberikan informasi
                dan pelayanan kepada masyarakat.
            </p>

        </div>


        <div class="row g-4 kontak-info-row">


            {{-- ALAMAT --}}
            <div class="col-md-6 col-lg-3">

                <div class="kontak-card">

                    <div class="kontak-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <h3>Alamat Kantor</h3>

                    <p>
                        Desa Sirnamekar<br>
                        Kecamatan Tegalbuleud<br>
                        Kabupaten Sukabumi<br>
                        Jawa Barat
                    </p>

                </div>

            </div>


            {{-- TELEPON --}}
            <div class="col-md-6 col-lg-3">

                <div class="kontak-card">

                    <div class="kontak-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>

                    <h3>Telepon</h3>

                    <p>
                        Nomor telepon desa
                        dapat ditambahkan di sini.
                    </p>

                    <span class="kontak-placeholder">
                        Belum tersedia
                    </span>

                </div>

            </div>


            {{-- EMAIL --}}
            <div class="col-md-6 col-lg-3">

                <div class="kontak-card">

                    <div class="kontak-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <h3>Email</h3>

                    <p>
                        Alamat email resmi Pemerintah
                        Desa Sirnamekar.
                    </p>

                    <span class="kontak-placeholder">
                        Belum tersedia
                    </span>

                </div>

            </div>


            {{-- JAM PELAYANAN --}}
            <div class="col-md-6 col-lg-3">

                <div class="kontak-card">

                    <div class="kontak-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>

                    <h3>Jam Pelayanan</h3>

                    <p>
                        Informasi jam pelayanan
                        Kantor Desa Sirnamekar.
                    </p>

                    <span class="kontak-placeholder">
                        Sesuaikan data desa
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= FORM KONTAK ================= --}}
<section class="pesan-section">

    <div class="container">

        <div class="row g-5 align-items-stretch">


            {{-- BAGIAN KIRI --}}
            <div class="col-lg-5">

                <div class="pesan-info">

                    <span class="section-label">
                        KONTAK
                    </span>

                    <h2>
                        Ada Pertanyaan?
                    </h2>

                    <p>
                        Silakan sampaikan pertanyaan, informasi,
                        kritik, atau saran kepada Pemerintah
                        Desa Sirnamekar melalui formulir berikut.
                    </p>


                    <div class="pesan-feature">

                        <div class="pesan-feature-icon">
                            <i class="bi bi-building"></i>
                        </div>

                        <div>

                            <h4>Kantor Desa Sirnamekar</h4>

                            <p>
                                Kecamatan Tegalbuleud,
                                Kabupaten Sukabumi.
                            </p>

                        </div>

                    </div>


                    <div class="pesan-feature">

                        <div class="pesan-feature-icon">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>

                        <div>

                            <h4>Pelayanan Masyarakat</h4>

                            <p>
                                Informasi dan pelayanan untuk
                                masyarakat Desa Sirnamekar.
                            </p>

                        </div>

                    </div>


                    <div class="pesan-feature">

                        <div class="pesan-feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <h4>Informasi Resmi</h4>

                            <p>
                                Media informasi resmi Pemerintah
                                Desa Sirnamekar.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- BAGIAN KANAN / FORM --}}
            <div class="col-lg-7">

                <div class="kontak-form-card">

                    <div class="form-title">

                        <h3>Kirim Pesan</h3>

                        <p>
                            Isi formulir di bawah untuk menghubungi
                            Pemerintah Desa Sirnamekar.
                        </p>

                    </div>


                    <form action="#" method="POST">

                        @csrf

                        <div class="row g-3">


                            <div class="col-md-6">

                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    name="nama"
                                    class="form-control kontak-input"
                                    placeholder="Masukkan nama lengkap"
                                >

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Nomor WhatsApp
                                </label>

                                <input
                                    type="text"
                                    name="whatsapp"
                                    class="form-control kontak-input"
                                    placeholder="Contoh: 08xxxxxxxxxx"
                                >

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control kontak-input"
                                    placeholder="Masukkan alamat email"
                                >

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Subjek
                                </label>

                                <input
                                    type="text"
                                    name="subjek"
                                    class="form-control kontak-input"
                                    placeholder="Tuliskan subjek pesan"
                                >

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Pesan
                                </label>

                                <textarea
                                    name="pesan"
                                    class="form-control kontak-input"
                                    rows="6"
                                    placeholder="Tuliskan pesan Anda..."
                                ></textarea>

                            </div>


                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn-kirim"
                                >

                                    <i class="bi bi-send-fill"></i>

                                    Kirim Pesan

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= LOKASI ================= --}}
<section class="lokasi-section">

    <div class="container">

        <div class="lokasi-heading">

            <div>

                <span class="section-label">
                    LOKASI
                </span>

                <h2>
                    Lokasi Kantor Desa
                </h2>

                <p>
                    Desa Sirnamekar, Kecamatan Tegalbuleud,
                    Kabupaten Sukabumi, Jawa Barat.
                </p>

            </div>

        </div>


        <div class="map-placeholder">

            <div class="map-placeholder-content">

                <div class="map-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>

                <h3>Google Maps Desa Sirnamekar</h3>

                <p>
                    Lokasi kantor desa dapat ditampilkan
                    menggunakan Google Maps di bagian ini.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection