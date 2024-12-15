<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

  <Head title="E-Learning SMK Nurul Jadid" />
  <GuestLayout>

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-mortarboard-fill me-2"></i>
                Wujudkan Mimpimu Bersama SMK Nurul Jadid
              </div>

              <h1 class="mb-4">
                Sistem Manajemen <br>
                Pembelajaran <br>
                <span class="accent-text">E-Learning SMK Nurul Jadid</span>
              </h1>

              <p class="mb-4 mb-md-5">
                SMK Nurul Jadid memberikan kesempatan belajar dengan teknologi modern yang memudahkan proses belajar mengajar. 
                Bergabunglah dan raih masa depan cerah bersama kami.
              </p>

              <div class="hero-buttons">
                <Link :href="route('register')" class="btn btn-primary me-0 me-sm-2 mx-1">Daftar Sekarang</Link>
                <a href="https://youtu.be/NCMuVN4fFgo?si=2Ojh0asVQFzSB-nI" target="_blank" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Tonton Video
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <div class="customer-avatars">
                  <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                  <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                  <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                  <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                  <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2">12,000+ siswa dan alumni SMK Nurul Jadid telah meraih sukses melalui E-Learning kami.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-trophy"></i>
              </div>
              <div class="stat-content">
                <h4>3x Menang Penghargaan</h4>
                <p class="mb-0">Keunggulan dalam pendidikan dan pengajaran</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-briefcase"></i>
              </div>
              <div class="stat-content">
                <h4>6.5k Siswa Terdaftar</h4>
                <p class="mb-0">Membantu lebih dari 6.500 siswa sukses</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <div class="stat-content">
                <h4>80k Materi Pembelajaran</h4>
                <p class="mb-0">Akses ribuan materi pelajaran untuk semua jurusan</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-award"></i>
              </div>
              <div class="stat-content">
                <h4>6x Penghargaan Nasional</h4>
                <p class="mb-0">Menjadi yang terbaik dalam bidang pendidikan</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->


    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
              <i class="bi bi-award"></i>
              <h4>Penghargaan Nasional</h4>
              <p>SMK Nurul Jadid telah meraih berbagai penghargaan dalam bidang pendidikan dan pengajaran</p>
            </div>
          </div><!-- End Feature Box-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-box blue">
              <i class="bi bi-patch-check"></i>
              <h4>Materi Berkualitas</h4>
              <p>Pelajaran yang disusun oleh pengajar profesional dan dapat diakses kapan saja</p>
            </div>
          </div><!-- End Feature Box-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-box green">
              <i class="bi bi-sunrise"></i>
              <h4>Belajar Mandiri</h4>
              <p>Fasilitas belajar online yang mendukung belajar secara mandiri di mana saja</p>
            </div>
          </div><!-- End Feature Box-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-box red">
              <i class="bi bi-shield-check"></i>
              <h4>Keamanan Data</h4>
              <p>Keamanan data siswa terjaga dengan sistem proteksi terbaru</p>
            </div>
          </div><!-- End Feature Box-->

        </div>

      </div>

    </section><!-- /Features Cards Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">TENTANG KAMI</span>
            <h2 class="about-title">SMK Nurul Jadid, Pendidikan Berkualitas</h2>
            <p class="about-description">Kami berkomitmen untuk menyediakan pendidikan yang berkualitas bagi generasi muda yang siap bersaing di dunia industri. Sistem E-Learning kami mendukung pengajaran yang inovatif dan efektif.</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Pengajaran berbasis teknologi</li>
                  <li><i class="bi bi-check-circle-fill"></i> Fasilitas lengkap untuk pembelajaran jarak jauh</li>
                  <li><i class="bi bi-check-circle-fill"></i> Pembelajaran fleksibel dan interaktif</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Materi terbaru dan relevan</li>
                  <li><i class="bi bi-check-circle-fill"></i> Dukungan 24/7 untuk siswa dan orang tua</li>
                  <li><i class="bi bi-check-circle-fill"></i> Sistem ujian online yang transparan dan adil</li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                    <img src="../Asset/img/kepala.png" alt="CEO Profile" class="profile-image">
                    <div>
                      <h4 class="profile-name">Moh. Arief Hariyanto, M.Pd.</h4>
                      <p class="profile-position">Kepala SMK Nurul Jadid</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Hubungi Kami</p>
                      <p class="contact-number">+123 456-789</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="assets/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>15+ <span>Tahun</span></h3>
                <p>Pengalaman dalam dunia pendidikan</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
  </GuestLayout>
</template>
