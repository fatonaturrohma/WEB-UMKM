<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMKM Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    .navbar-brand img {
      width: 40px;
      height: auto;
      margin-right: 10px;
    }

    .hero-section {
      background: url('https://via.placeholder.com/1920x600') no-repeat center center;
      background-size: cover;
      color: white;
      text-align: center;
      padding: 100px 0;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    footer {
      background-color: #004085;
      color: white;
      text-align: center;
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/images/logo.png" alt="Logo UMKM Desa"> UMKM Desa
      </a>      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="/artikel">Artikel</a></li>
          <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
          <li class="nav-item"><a class="nav-link" href="/pendaftaran">Pendaftaran</a></li>
          <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="container py-4">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 UMKM Desa | Semua Hak Dilindungi</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\umkmdesa\resources\views/layouts/app.blade.php ENDPATH**/ ?>