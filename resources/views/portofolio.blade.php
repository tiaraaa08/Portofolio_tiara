<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from davis-html.netlify.app/index1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 04:56:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Page Title -->
    <title>Tiara - Personal Portfolio</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/ripples.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

</head>

<body id="home">
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                <li><a href="#home" class="st-smooth-move">Beranda</a></li>
                                <li><a href="#about" class="st-smooth-move">Tentang Saya</a></li>
                                <li><a href="#portfolio" class="st-smooth-move">Portfolio</a></li>
                                <li><a href="#contact" class="st-smooth-move">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="st-main-header-right">
                        {{-- <a href="/regis" class="sp-phone sp-phone-no mx-4">REGISTRASI</a> --}}
                        <a href="/login" class="sp-phone sp-phone-no">
                            @if (Auth::check())
                                <a href="{{ url('/tabel') }}">{{ Auth::user()->nama }}</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                            @endif

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->


    <!-- Start Hero Seciton -->
    <div class="st-height-b80 st-height-lg-b80"></div>
    <section class="st-hero-wrap st-parallax">
        <div class="st-hero st-style1 st-ripple-version">
            <div class="container">
                <div class="st-hero-text">
                    <h3>Halo, Saya</h3>
                    <h1>Ayu <br>Mutiara
                    </h1>
                    <h2>Web Developer</h2>
                    <div class="st-hero-btn">
                        <a href="#contact" class="st-btn st-style1 st-color1 st-smooth-move">Rekrut Aku!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Image - Social Link Group -->
        <div class="st-hero-img st-to-right">
            <img class="wow fadeInRight" src="{{ asset('img/wony.png') }}" alt="Hero">
            <div class="st-social-group wow fadeInLeft">
                <div class="st-social-link">
                    <a href="https://www.instagram.com/t.tiarra.a?igsh=c2o5ZHRsYnBmZWZs" class="st-social-btn active">
                        <span class="st-social-icon"><img src="{{ asset('img/sosial/instagram.svg') }}"
                                alt=""></span>
                        <span class="st-icon-name">Instagram</span>
                    </a>
                    <a href="http://wa.me//+6285704805612" class="st-social-btn">
                        <span class="st-social-icon"><img src="{{ asset('img/sosial/whatsapp.svg') }}"
                                alt=""></i></span>
                        <span class="st-icon-name">WhatsApp</span>
                    </a>
                    <a href="https://x.com/dutamiayam?s=09" class="st-social-btn">
                        <span class="st-social-icon"><img src="{{ asset('img/sosial/x.svg') }}" alt=""></span>
                        <span class="st-icon-name">X</span>
                    </a>
                    <a href="https://www.tiktok.com/@titititiara?_t=8r2xhvlRbU2&_r=1" class="st-social-btn">
                        <span class="st-social-icon"><img src="{{ asset('img/sosial/tiktok.svg') }}"
                                alt=""></span>
                        <span class="st-icon-name">Tik Tok</span>
                    </a>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <!-- End Hero Seciton -->

    <!-- Start About Seciton -->
    <section id="about" class="st-about-wrap">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">TENTANG SAYA</h4>
                <h2 class="st-section-heading-subtitle">TENTANG SAYA</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="st-about-img-wrap">
                        <div class="st-about-img st-dynamic-bg st-bg" data-src="{{ asset('img/wony.png') }}"></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-text-block st-style1">
                                <h2 class="st-text-block-title">Hai, Saya Ayu Mutiara</h2>
                                <h4 class="st-text-block-subtitle">Web Developer</h4>
                                <div class="st-text-block-text">
                                    <p>Saya adalah seorang web developer pemula yang bersemangat dalam menciptakan
                                        pengalaman online yang menarik. Dengan minat yang besar pada web developer, saya
                                        terus belajar
                                        dan mengembangkan proyek-proyek pribadi untuk mengasah kemampuan saya.</p>
                                </div>
                                <ul class="st-text-block-details st-mp0">
                                    <li><span>Tanggal Lahir</span> : <span>Feb 20 2008</span></li>
                                    <li><span>No. Hp</span> : <span>+62 857 0480 5612</span></li>
                                    <li><span>Email</span> : <span>devis@example.com</span></li>
                                    <li><span>Alamat</span> : <span>Blitar, Jawa Timur</span></li>
                                </ul>
                                <div class="st-text-block-btn">
                                    <a href="#" class="st-btn st-style1 st-color1">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Seciton -->

    <!-- Start Service Seciton -->

    <!-- End Service Seciton -->


    <!-- Start Skill Seciton -->
    <section class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">KEAHLIAN SAYA</h4>
                <h2 class="st-section-heading-subtitle">KEAHLIAN SAYA</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-skill-wrap">
                        <div class="st-skill-heading">
                            <h2 class="st-skill-title">Keterampilan saya yang relevan dengan pekerjaan ini sudah saya
                                sebutkan semua.</h2>
                            <div class="st-skill-subtitle">Saat ini, saya sedang aktif belajar JavaScript dan framework
                                seperti React
                                untuk memperluas kemampuan saya dalam membangun aplikasi web yang lebih kompleks. Namun,
                                dengan dasar yang
                                kuat dalam HTML, CSS, PHP, dan desain, saya yakin dapat dengan cepat beradaptasi dengan
                                teknologi baru.
                            </div>
                        </div><!-- .st-skill-heading -->
                    </div>
                </div>

                <!-- Progressbar -->

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b30"></div>
                    <div class="st-progressbar-wrap">
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">HTML</h3>
                                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">60%</div>
                            </div>
                            <div class="st-progressbar" data-progress="60">
                                <div class="st-progressbar-in wow fadeInLeft"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">CSS</h3>
                                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">55%</div>
                            </div>
                            <div class="st-progressbar" data-progress="55">
                                <div class="st-progressbar-in wow fadeInLeft"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">FIGMA</h3>
                                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">65%</div>
                            </div>
                            <div class="st-progressbar" data-progress="65">
                                <div class="st-progressbar-in wow fadeInLeft"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">PHP</h3>
                                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">60%</div>
                            </div>
                            <div class="st-progressbar" data-progress="60">
                                <div class="st-progressbar-in wow fadeInLeft"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">REACT</h3>
                                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">1%</div>
                            </div>
                            <div class="st-progressbar" data-progress="1">
                                <div class="st-progressbar-in wow fadeInLeft"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-height-b30 st-height-lg-b20"></div>
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-heading">
                                <h3 class="st-progressbar-title">JAVASCRIPT</h3>
                                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">1%</div>
                            </div>
                            <div class="st-progressbar" data-progress="1">
                                <div class="st-progressbar-in wow fadeInLeft"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Seciton -->


    <!-- Start Resume Seciton -->

    <!-- End Resume Seciton -->


    <!-- Start Portfolio Seciton -->
    <section id="portfolio">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">PORTOFOLIO</h4>
                <h2 class="st-section-heading-subtitle">PORTOFOLIO</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Menambahkan `row-cols-md-3` untuk 3 kolom di layar medium ke atas -->
                <div class="row">
                    @foreach ($porto as $item)
                        <div class="col-lg-4 col-md-6"> <!-- Menggunakan `col` untuk tiap item -->
                            <div class="st-portfolio-single st-style1 st-lightgallery">
                                <div class="st-portfolio-item">
                                    <a href="{{ url('/detail/' . $item->id) }}" class="st-portfolio">
                                        <img src="{{ asset('storage/' . $item->foto) }}">
                                        <div class="st-portfolio-item-hover">
                                            <i class="fas fa-plus-circle"></i>
                                            <h6>{{ $item->nama }}</h6>
                                            <p>{{ $item->tanggal }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Portfolio Seciton -->

    <!-- Start Review Seciton -->

    <!-- End Review Seciton -->


    <!-- Start Blog Seciton -->

    <!-- End Blog Seciton -->

    <!-- Start Contact Seciton -->
    <section id="contact" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">KONTAK SAYA</h4>
                <h2 class="st-section-heading-subtitle">KONTAK SAYA</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Contact Container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="st-contact-title">Kirim Pesan</h3>
                    <div id="st-alert"></div>
                    <form action="#" method="POST" class="st-contact-form" id="contact-form">
                        <div class="st-form-field">
                            <input type="text" id="name" name="name" placeholder="Nama...." required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" id="email" name="email" placeholder="Email...." required>
                        </div>
                        <div class="st-form-field">
                            <textarea cols="30" rows="10" id="msg" name="msg" placeholder="Isi Pesan...." required></textarea>
                        </div>
                        <button class="st-btn st-style1 st-color1" type="submit" id="submit"
                            name="submit">Kirim Sekarang!</button>
                    </form>
                </div>
                <div class="st-height-b0 st-height-lg-b30"></div>

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b40"></div>
                    <h3 class="st-contact-title">Info</h3>
                    <div class="st-contact-info-wrap">
                        <div class="st-single-contact-info">
                            <i class="fas fa-envelope"></i>
                            <div class="st-single-info-details">
                                <h4>Email</h4>
                                <a href="#">devis@example.com</a>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="st-single-info-details">
                                <h4>Phone</h4>
                                <span>+62 857 0480 5612</span>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="st-single-info-details">
                                <h4>Alamat</h4>
                                <span>Blitar<br>Jawa Timur</span>
                            </div>
                        </div>
                        <div class="st-social-info">
                            <div class="st-social-text">Kunjungi Profile Saya Jika Tertarik</div>
                            <div class="st-social-link">
                                <a href="https://www.instagram.com/t.tiarra.a?igsh=c2o5ZHRsYnBmZWZs"
                                    class="st-social-btn active">
                                    <span class="st-social-icon"><img src="{{ asset('img/sosial/instagram.svg') }}"
                                            alt=""></span>
                                    <span class="st-icon-name">Instgram</span>
                                </a>
                                <a href="https://x.com/dutamiayam?s=09" class="st-social-btn">
                                    <span class="st-social-icon"><img src="{{ asset('img/sosial/x.svg') }}"
                                            alt=""></span>
                                    <span class="st-icon-name">X</span>
                                </a>
                                <a href="http://wa.me//+6285704805612" class="st-social-btn">
                                    <span class="st-social-icon"><img src="{{ asset('img/sosial/whatsapp.svg') }}"
                                            alt=""></span>
                                    <span class="st-icon-name">WhatsApp</span>
                                </a>
                                <a href="https://www.tiktok.com/@titititiara?_t=8r2xhvlRbU2&_r=1"
                                    class="st-social-btn">
                                    <span class="st-social-icon"><img src="{{ asset('img/sosial/tiktok.svg') }}"
                                            alt=""></span>
                                    <span class="st-icon-name">Tik Tok</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Contact Seciton -->

    <!-- Scripts -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jquery.slick.min.js"></script>
    <script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/ripples.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from davis-html.netlify.app/index1 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 04:56:45 GMT -->

</html>
