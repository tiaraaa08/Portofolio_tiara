<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('') }}" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        Tabel Portofolio - Tiara
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/fonts/remixicon/remixicon.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme mt-4">
                {{-- <li class="menu-header pb-6 ">
                    <span class="menu-header-text fs-4">Akun</span>
                </li> --}}
                <div class="content-wrapper">
                    <div class="scrollable-content">
                        <div class="container-xxl flex-grow-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-6">
                                        <div class="text-center fs-3 mt-3">Admin</div>
                                        @if ($user)
                                            <div class="card-body col-12">
                                                <div class="d-flex align-items-start align-items-sm-center">
                                                    <img src="{{ asset('img/admin.png') }}" alt="user-avatar"
                                                        class="d-block w-100 h-100 rounded" id="uploadedAvatar" />
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 fw-bold">
                                                <form id="formAccountSettings">
                                                    <div class="row g-3">
                                                        <div class="col-12 my-3">
                                                            <div class="form-floating form-floating-outline">
                                                                <input class="form-control" type="text"
                                                                    id="firstName" name="firstName"
                                                                    value="{{ $user->nama }}" autofocus disabled />
                                                                <label for="firstName">Nama</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 my-3">
                                                            <div class="form-floating form-floating-outline">
                                                                <input class="form-control" type="email"
                                                                    id="email" name="email"
                                                                    value="{{ $user->email }}" disabled />
                                                                <label for="email">E-mail</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form action="{{ url('/logout') }}" method="POST"
                                                    class="d-flex justify-content-center mb-4 ">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger col-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <img src="{{ asset('img/logout.svg') }}"
                                                                    class="w-100">
                                                            </div>
                                                            <div class="col text-start">
                                                                Logout
                                                            </div>
                                                        </div>
                                                        {{-- <img src="{{ asset('img/logout.svg') }}" class="w-25"></img>Logout --}}
                                                    </button>
                                                </form>
                                            </div>
                                        @else
                                            <p>Data pengguna tidak ditemukan.</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <div class="navbar-brand fs-3"> Hai
                            @if (Auth::check())
                                {{ Auth::user()->nama }}
                            @endif
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link fs-4" href="{{ url('/') }}">Portofolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-4" href="{{ url('/tabel') }}">Tabel Projek</a>
                                </li>
                            </ul>
                            {{-- <form class="d-flex" onsubmit="return false">
                                <input id="searchInput" class="form-control form-control-sm me-2" type="search" placeholder="Search"
                                       aria-label="Search" />
                                <button class="btn btn-outline-primary" type="button" onclick="searchData()">Search</button>
                            </form> --}}


                            <form class="d-flex" onsubmit="return false">
                                <input id="searchInput" class="form-control form-control-sm me-2" type="search"
                                    placeholder="Ketik Pencarian" aria-label="Search" />
                                <button class="btn btn-outline-primary" type="button"
                                    onclick="searchData()">Cari</button>
                            </form>

                        </div>
                        {{-- <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger w-25">
                                <div class="row">
                                    <div class="col justify-align-end">
                                        <img src="{{ asset('img/logout.svg') }}" class="w-25">
                                    </div>
                                    <div class="col text-start">
                                        Logout
                                    </div>
                                </div>
                            </button>
                        </form> --}}
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper p-3">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="d-flex align-items-center">
                                <h5 class="card-header">Daftar Projek</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-success ms-auto me-5"
                                    data-bs-toggle="modal" data-bs-target="#tambah">
                                    Tambah
                                </button>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Projek</th>
                                            <th>Deskripsi</th>
                                            <th>Teknologi </th>
                                            <th>Tanggal Pengerjaan</th>
                                            <th>Link</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($porto as $item)
                                            @csrf
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td
                                                    style="white-space: normal; word-break: break-word; min-width: 400px;">
                                                    <span style="display: block;">{{ $item->deskripsi }}</span>
                                                </td>
                                                <td
                                                    style="white-space: normal; word-break: break-word; min-width: 250px;">
                                                    <span style="display: block;">{{ $item->teknologi }}
                                                </td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>
                                                    <a class="d-inline-block text-truncate" style="max-width: 100px"
                                                        href="{{ $item->link }}"
                                                        target="_blank">{{ $item->link }}</a>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto"
                                                        width="200rem" />
                                                </td>
                                                <td>
                                                    <form action="{{ url('delete/' . $item->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button href="url_to_delete"
                                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                                            type="submit"
                                                            class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit-{{ $item->id }}">
                                                        Edit
                                                    </button>
                                                    {{-- <a href="{{ url('edit/' . $item->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                                </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <p id="noDataMessage" style="display: none; color: red; text-align: center;"
                                class=" my-3 fs-5 fw-medium">Data tidak ditemukan</p>
                        </div>
                        <!--/ Hoverable Table rows -->
                    </div>
                    <!-- / Content -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->


    @auth
        {{-- Modal tambah --}}
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Project </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Teknologi</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="HTML" id="html">
                                                <label class="form-check-label" for="html">HTML</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="CSS" id="css">
                                                <label class="form-check-label" for="css">CSS</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="BOOTSTRAP" id="bootstrap">
                                                <label class="form-check-label" for="bootstrap">BOOTSTRAP</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="JAVASCRIPT" id="javascript">
                                                <label class="form-check-label" for="javascript">JAVASCRIPT</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="LARAVEL" id="laravel">
                                                <label class="form-check-label" for="laravel">LARAVEL</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="JAVA" id="java">
                                                <label class="form-check-label" for="java">JAVA</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="PHP" id="php">
                                                <label class="form-check-label" for="php">PHP</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengerjaan</label>
                                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control" id="exampleInputPassword1"
                                        placeholder="Masukkan Link Github" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gambar</label>
                                    <input type="file" name="foto" class="form-control" id="exampleInputPassword1"
                                        required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- modal edit --}}
        @foreach ($porto as $item)
            <form method="POST" action="/edit/{{ $item->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal fade" id="edit-{{ $item->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Projek Anda</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $item->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputPassword1">{{ $item->deskripsi }}</textarea>
                                </div>
                                @php
                                    $selectedTechnologies = explode(', ', $item->teknologi);
                                @endphp
                                <div class="mb-3">
                                    <label class="form-label">Teknologi</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="HTML" id="html"
                                                    {{ in_array('HTML', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="html">HTML</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="CSS" id="css"
                                                    {{ in_array('CSS', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="css">CSS</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="BOOTSTRAP" id="bootstrap"
                                                    {{ in_array('BOOTSTRAP', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bootstrap">BOOTSTRAP</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="JAVASCRIPT" id="javascript"
                                                    {{ in_array('JAVASCRIPT', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="javascript">JAVASCRIPT</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="LARAVEL" id="laravel"
                                                    {{ in_array('LARAVEL', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="laravel">LARAVEL</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="JAVA" id="java"
                                                    {{ in_array('JAVA', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="java">JAVA</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="teknologi[]"
                                                    value="PHP" id="php"
                                                    {{ in_array('PHP', $selectedTechnologies) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="php">PHP</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengerjaan</label>
                                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1"
                                        value="{{ $item->tanggal }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control" id="exampleInputPassword1"
                                        value="{{ $item->link }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputFoto" class="form-label">Ganti Gambar (Opsional)</label>
                                    <input type="file" name="foto" class="form-control" id="exampleInputFoto">
                                    <div class="row">
                                        <div class="col-12 text-truncate">
                                            Gambar saat ini: <a href="{{ asset('storage/' . $item->foto) }}"
                                                target="_blank">{{ asset('storage/' . $item->foto) }}</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach

        {{-- dan else sampe endauth ini juga baru --}}
    @else
        <script>
            window.location.href = "login";
        </script>

    @endauth


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js ') }}"></script>
    <script src="{{ asset('vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js ') }}"></script>
    <script src="{{ asset('vendor/js/menu.js ') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('js/maintabel.js') }}"></script>

    <script>
        function searchData() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const rows = document.querySelectorAll("table tbody tr");
            const noDataMessage = document.getElementById("noDataMessage");

            // Variabel untuk melacak apakah ada hasil yang cocok
            let found = false;

            // Loop setiap baris dan cek apakah ada yang cocok dengan input pencarian
            rows.forEach(row => {
                // Gabungkan teks di semua kolom dalam satu baris
                const rowText = Array.from(row.querySelectorAll("td"))
                    .map(td => td.textContent.toLowerCase())
                    .join(" ");
                // Tampilkan baris jika ada kecocokan, sembunyikan jika tidak
                if (rowText.includes(searchInput)) {
                    row.style.display = "";
                    found = true;
                } else {
                    row.style.display = "none";
                }
            });

            // Tampilkan pesan "Data tidak ditemukan" jika tidak ada hasil yang cocok
            noDataMessage.style.display = found ? "none" : "block";
        }
    </script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
