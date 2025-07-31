@extends('layouts.app')

@section('title', 'Muhammad Abdul Aziz - Portofolio')

@section('content')

    @section('hero')
        <div class="hero-full">
            <div id="hero" class="anchor-point"></div>

            {{-- Social Media Bar Vertikal --}}
            <div class="hero-social-bar">
                <a href="https://www.linkedin.com/in/muhammad-abdul-aziz-9bbbab251/" aria-label="LinkedIn"><i
                        class='bx bxl-linkedin-square'></i></a>
                <a href="https://github.com/akuazizz" aria-label="GitHub"><i class='bx bxl-github'></i></a>
                <a href="https://www.instagram.com/ngabdulazizz/" aria-label="Instagram"><i
                        class='bx bxl-instagram-alt'></i></a>
            </div>
            <div class="hero-content">
                <h1 class="hero-title">HEY, I'M MUHAMMAD ABDUL AZIZ</h1>
                <p class="hero-subtitle">
                    A Web Developer focused on building beautiful and functional Web Applications.
                </p>
                <div class="hero-actions">
                    <a href="#projects" class="btn btn-primary">PROJECTS</a>
                </div>
            </div>
        </div>
    @endsection
    {{-- 2. Bagian TENTANG SAYA --}}
    <section class="section" id="about">
        <div class="section-header">
            <h2 class="section-title">ABOUT ME</h2>
            <p class="section-subtitle">
                Di sini Anda akan menemukan lebih banyak informasi tentang saya, apa yang saya lakukan, dan keahlian saya
                saat ini terutama dalam hal pemrograman dan teknologi.
            </p>
        </div>

        <div class="about-grid">
            <div class="about-text">
                <h3>Kenali saya lebih jauh!</h3>
                <p>
                    Saya adalah seorang <strong>Full-Stack Web Developer</strong> yang membangun dan mengelola sisi
                    Front-end dan Back-end dari Situs Web dan Aplikasi Web yang mengarah pada kesuksesan produk secara
                    keseluruhan. Lihat beberapa karya saya di bagian <a href="#projects">Proyek</a>.
                </p>
                <p>
                    Saya juga suka berbagi konten terkait hal-hal yang telah saya pelajari selama bertahun-tahun dalam
                    <strong>Pengembangan Web</strong> sehingga dapat membantu orang lain di Komunitas Pengembang. Jangan
                    ragu untuk Terhubung atau Ikuti saya di <a
                        href="https://www.linkedin.com/in/muhammad-abdul-aziz-9bbbab251/" target="_blank">LinkedIn</a>
                    di mana saya memposting konten bermanfaat terkait Pengembangan Web dan Pemrograman.
                </p>
                <p>
                    Saya terbuka untuk kesempatan <strong>Kerja</strong> di mana saya dapat berkontribusi, belajar, dan
                    berkembang. Jika Anda memiliki kesempatan bagus yang sesuai dengan keahlian dan pengalaman saya, jangan
                    ragu untuk <a href="#contact">menghubungi</a> saya.
                </p>
                <a href="#contact" class="btn btn-primary">CONTACT</a>
            </div>

            <div class="about-skills">
                <h3>My Skills</h3>
                <div class="skills-list">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>Bootstrap</span>
                    <span>Tailwind CSS</span>
                    <span>Vue.js</span>
                    <span>SASS</span>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Bagian PROYEK UNGGULAN --}}
    <section class="section" id="projects">
        {{-- Header Section (kita gunakan style yang sama seperti About Me) --}}
        <div class="section-header">
            <h2 class="section-title">PROJECTS</h2>
            <p class="section-subtitle">
                Berikut adalah beberapa proyek pribadi dan klien yang telah saya buat, masing-masing dengan studi kasusnya
                sendiri.
            </p>
        </div>

        {{-- Kontainer untuk semua item proyek --}}
        <div class="projects-container">
            {{-- PROYEK 1 --}}
            <div class="project-item">
                <div class="project-image">
                    <img src="{{ asset('images/project-wbs.png') }}" alt="Bingkai Laptop" class="laptop-frame">
                </div>
                <div class="project-details">
                    <h3 class="project-title">WBS Banjarnegara</h3>
                    <p class="project-description">
                        Sistem Pelaporan Pelanggaran (Whistleblowing System) untuk Pemerintah Kabupaten Banjarnegara.
                        Dibangun untuk menciptakan pemerintahan yang bersih dan berintegritas dengan memfasilitasi pelaporan
                        yang aman dan rahasia.
                    </p>
                    <a href="https://wbs.banjarnegarakab.go.id/" target="_blank" class="btn btn-primary">LIHAT
                        LANGSUNG</a>
                </div>
            </div>

            {{-- PROYEK 2 --}}
            <div class="project-item">
                <div class="project-image">
                    <img src="{{ asset('images/project-statistik.png') }}" alt="Mockup Proyek ID SIGMA-SOVI">
                </div>
                <div class="project-details">
                    <h3 class="project-title">ID SIGMA-SOVI</h3>
                    <p class="project-description">
                        Dashboard Analisis Kerentanan Sosial Indonesia (ID SIGMA-SOVI) untuk memahami tingkat kerentanan
                        sosial masyarakat terhadap bencana. Dibangun menggunakan R Shiny untuk visualisasi data yang
                        interaktif.
                    </p>
                    <a href="https://sigmasovi.shinyapps.io/dashboard-statistik/" target="_blank"
                        class="btn btn-primary">LIHAT LANGSUNG</a>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. Bagian KONTAK --}}
    <section class="section" id="contact">
        {{-- Header Section --}}
        <div class="section-header">
            <h2 class="section-title">CONTACT</h2>
            <p class="section-subtitle">
                Jangan ragu untuk menghubungi saya dengan mengirimkan formulir di bawah ini dan saya akan segera
                membalasnya.
            </p>
        </div>

        {{-- Kontainer untuk Formulir --}}
        <div class="contact-form-container">
            <form action="#" method="POST" class="contact-form">
                @csrf {{-- Token keamanan Laravel, wajib untuk setiap form --}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email"
                        required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Enter Your Message" rows="8"
                        required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-submit">SUBMIT</button>
            </form>
        </div>
    </section>

@endsection