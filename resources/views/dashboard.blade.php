<!DOCTYPE html>
<html>

<head>
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo" height="30"
                class="mr-2"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('http://127.0.0.1:8000') }}" style="color: white">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('') }}" style="color: white">Simulasi Peminjaman</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/gambar.jpg') }}" alt="Gambar" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>Selamat Datang di Website Saya</h1>
                <p>Ini adalah contoh halaman beranda dengan Laravel dan Bootstrap.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
