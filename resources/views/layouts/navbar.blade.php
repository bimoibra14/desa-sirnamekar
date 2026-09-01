<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" id="mainNavbar">

    <div class="container">

        {{-- BRAND --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">

            <div class="brand-icon">
                <i class="bi bi-buildings-fill"></i>
            </div>

            <div class="brand-text">
                <strong>DESA SIRNAMEKAR</strong>
            </div>

        </a>


        {{-- MOBILE BUTTON --}}
        <button
            class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarDesa"
            aria-controls="navbarDesa"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        {{-- MENU --}}
        <div class="collapse navbar-collapse" id="navbarDesa">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}"
                    >
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('profil*') ? 'active' : '' }}"
                        href="{{ url('/profil') }}"
                    >
                        Profil Desa
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('pemerintahan*') ? 'active' : '' }}"
                        href="{{ url('/pemerintahan') }}"
                    >
                        Pemerintahan
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('potensi*') ? 'active' : '' }}"
                        href="{{ url('/potensi') }}"
                    >
                        Potensi Desa
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link gis-menu {{ request()->is('peta-gis*') ? 'active' : '' }}"
                        href="{{ url('/peta-gis') }}"
                    >
                        <i class="bi bi-map"></i>
                        Peta GIS
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('berita*') ? 'active' : '' }}"
                        href="{{ url('/berita') }}"
                    >
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('galeri*') ? 'active' : '' }}"
                        href="{{ url('/galeri') }}"
                    >
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('kontak*') ? 'active' : '' }}"
                        href="{{ url('/kontak') }}"
                    >
                        Kontak
                    </a>
                </li>

            </ul>

            {{-- LOGIN ADMIN --}}
            <a
                href="{{ url('/login') }}"
                class="btn-login-admin ms-lg-3 mt-3 mt-lg-0"
            >
                <i class="bi bi-person-fill-lock"></i>
                Login Admin
            </a>

        </div>

    </div>

</nav>

{{-- ===== NAVBAR TRANSPARAN HANYA DI BERANDA ===== --}}
@if(request()->is('/'))
<style>
/* Navbar transparan saat di atas hero */
#mainNavbar {
    background: transparent !important;
    box-shadow: none !important;
    position: fixed !important;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    transition: background 0.3s ease, box-shadow 0.3s ease;
}

/* Teks dan ikon jadi putih saat transparan */
#mainNavbar .nav-link,
#mainNavbar .brand-text strong,
#mainNavbar .brand-icon i {
    color: #ffffff !important;
    transition: color 0.3s ease;
}

#mainNavbar .nav-link.active,
#mainNavbar .nav-link:hover {
    color: #e6a817 !important;
}

/* Navbar solid saat di-scroll */
#mainNavbar.scrolled {
    background: #ffffff !important;
    box-shadow: 0 2px 12px rgba(0,0,0,0.1) !important;
}

#mainNavbar.scrolled .nav-link,
#mainNavbar.scrolled .brand-text strong,
#mainNavbar.scrolled .brand-icon i {
    color: #1a5c2e !important;
}

#mainNavbar.scrolled .nav-link.active,
#mainNavbar.scrolled .nav-link:hover {
    color: #e6a817 !important;
}

/* Tambah padding body supaya konten tidak tertutup navbar fixed */
body {
    padding-top: 0 !important;
}
</style>

<script>
// Deteksi scroll — tambah class 'scrolled' saat user scroll ke bawah
window.addEventListener('scroll', function() {
    var navbar = document.getElementById('mainNavbar');
    if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>
@endif