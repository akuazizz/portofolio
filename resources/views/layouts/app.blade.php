<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Portofolio Muhammad Abdul Aziz')</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar">
    <div class="navbar-container">
      <a href="#" class="navbar-brand">
        <img src="{{ asset('images/ariq.jpg') }}" alt="Foto Profil Muhammad Abdul Aziz" class="profile-pic">
        <span>MUHAMMAD ABDUL AZIZ</span>
      </a>
      <ul class="navbar-nav">
        <li><a href="#hero">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#projects">PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </nav>

  @yield('hero')
  {{-- Konten Utama --}}
  <main>
    @yield('content')
  </main>

  {{-- 5. FOOTER --}}
  <footer class="site-footer">
    <div class="footer-container">
      {{-- Konten utama footer dengan 2 kolom --}}
      <div class="footer-content">
        <div class="footer-info">
          <h3>MUHAMMAD ABDUL AZIZ</h3>
          <p>
            Seorang Web Developer yang fokus membangun Frontend & Backend dari Situs Web dan Aplikasi Web yang
            mengarah pada kesuksesan produk secara keseluruhan.
          </p>
        </div>
        <div class="footer-social">
          <h3>SOCIAL</h3>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/muhammad-abdul-aziz-9bbbab251/" aria-label="LinkedIn"><i class='bx bxl-linkedin-square'></i></a>
            <a href="https://github.com/akuazizz" aria-label="GitHub"><i class='bx bxl-github'></i></a>
            <a href="https://www.instagram.com/ngabdulazizz/" aria-label="Instagram"><i class='bx bxl-instagram-alt'></i></a>
          </div>
        </div>
      </div>

      {{-- Garis pemisah --}}
      <hr class="footer-separator">

      {{-- Copyright --}}
      <div class="footer-copyright">
        <p>© Copyright {{ date('Y') }}. Dibuat oleh <a href="#" target="_blank">Muhammad Abdul Aziz</a></p>
      </div>
    </div>
  </footer>
</body>

</html>