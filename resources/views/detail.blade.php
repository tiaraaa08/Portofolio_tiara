<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Portfolio - {{ $porto->nama }}</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body id="home">
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="container">
            <div class="st-main-header-in">
                <div class="st-nav">
                    <ul class="st-nav-list st-onepage-nav">
                        <li>
                            <a href="{{ url('/portofolio') }}"> <img src="{{ asset('img/kembali.svg') }}" style="width: 8%">
                                &nbsp; Kembali</a>
                        </li>
                    </ul>
                </div>
                <div class="st-main-header-right">
                    <a href="{{ Auth::check() ? url('/tabel') : url('/login') }}" class="sp-phone sp-phone-no">
                        {{ Auth::check() ? Auth::user()->nama : 'Login' }}
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    {{-- ini gausa make foreach, cukkup if aja kaya gini, soale kan foreach itu lk mau nampilme banyak data melalui perulangan, sementara iki cuman mau nampilne 1 data tok, lk dikasi foreach mana on bool iku --}}
    @if ($porto)
        <!-- Content Section -->
        <div class="st-content">
            <div class="st-page-heading st-dynamic-bg " data-src="{{ asset('storage/' . $porto->foto) }}">
                <div class="container">
                    <div class="st-page-heading-in text-center">
                        <h1 class="st-page-heading-title">By Ayu Mutiara</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-md-1">
                        <div class="st-post-details st-style1">
                            <div class="d-flex justify-content-center">
                                <img class="st-zoom-in " src="{{ asset('storage/' . $porto->foto) }}"
                                    alt="{{ $porto->nama }}">
                            </div>
                            <blockquote>{{ $porto->nama }}</blockquote>
                            <h4> Dibuat pada {{ $porto->tanggal }}</h4>
                            <div class="st-post-info">
                                <div class="st-post-text">
                                    <p>{{ $porto->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="st-post-meta">
                                <div class="st-post-tages">
                                    <h4 class="st-post-tage-title">Teknologi yang dipakai :</h4>
                                    <ul class="st-post-tage-list st-mp0">
                                        <li>{{ $porto->teknologi }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="st-hero-btn mt-4">
                                <a href="{{ $porto->link }}"target="_blank" class="st-btn st-style1 st-color1 st-smooth-move">Kunjungi Demo</a>
                            </div>
                            <div class="st-height-b60 st-height-lg-b60"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Data tidak tersedia.</p>
    @endif


    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
