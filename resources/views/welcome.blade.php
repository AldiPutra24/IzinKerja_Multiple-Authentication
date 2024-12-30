<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Izin Kerja dan Tinggal WNA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .welcome-container {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 50px auto;
        }
        .welcome-container h1 {
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .welcome-container p {
            margin-bottom: 20px;
            color: #555;
            font-size: 18px;
        }
        .btn-login {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .product-list {
            margin-top: 30px;
            text-align: left;
        }
        .product-item {
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #ffffff;
            margin-bottom: 15px;
            border-radius: 8px;
            transition: box-shadow 0.3s;
        }
        .product-item:hover {
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15);
        }
        .product-item strong {
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Layanan Izin WNA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Content -->
    <div class="welcome-container">
        <h1>Selamat Datang di Layanan Izin Kerja dan Tinggal WNA</h1>
        <p>
            Platform kami hadir untuk membantu Anda dalam mengurus dokumen izin kerja dan izin tinggal bagi warga negara asing (WNA) di Indonesia.
            Kami menawarkan proses yang cepat, transparan, dan terpercaya.
        </p>
        <a href="/account/login" class="btn-login">Login untuk Melanjutkan</a>

        <!-- Produk -->
        <div id="products" class="product-list mt-4">
            <h4>Produk Kami</h4>
            <div class="product-item">
                <strong>Izin Kerja WNA</strong>
                <p>
                    Layanan pengurusan izin kerja bagi warga negara asing untuk perusahaan atau individu. Proses cepat dengan legalitas yang terjamin.
                </p>
            </div>
            <div class="product-item">
                <strong>Izin Tinggal Sementara (ITAS)</strong>
                <p>
                    ITAS memungkinkan WNA tinggal di Indonesia untuk jangka waktu tertentu. Cocok untuk pekerja, pelajar, atau investor.
                </p>
            </div>
            <div class="product-item">
                <strong>Izin Tinggal Tetap (ITAP)</strong>
                <p>
                    Layanan pengurusan ITAP untuk WNA yang ingin tinggal lebih lama atau menetap di Indonesia dengan persyaratan lengkap.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4 py-4 bg-primary text-white">
        <p>&copy; 2024 Layanan Izin WNA. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
