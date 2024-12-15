<script setup>
import GuestLayout from '@/Layouts/StudentLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Pembelajaran" />
    <GuestLayout>
        <!-- Pembelajaran Section -->
        <section id="learning-section" class="learning-section blue-background">

            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Pembelajaran di Kelas X RPL</h2>
                <p class="text-muted">Temukan berbagai sumber pembelajaran interaktif untuk mendukung kegiatan belajar Anda.</p>
            </div><!-- End Section Title -->

            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    
                    <!-- Learning Card -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="learning-card">
                            <img src="@/asset/img/mtk.jpg" alt="Matematika" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Matematika</h3>
                                <p>Pelajari konsep matematika secara mendalam dengan modul dan video pembelajaran.</p>
                                <Link href="/matematika-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Learning Card -->

                    <!-- Learning Card -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="learning-card">
                            <img src="@/asset/img/ipa.jpg" alt="IPA" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Ilmu Pengetahuan Alam (IPA)</h3>
                                <p>Jelajahi dunia sains melalui eksperimen virtual dan pembahasan mendalam.</p>
                                <Link href="/ipa-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Learning Card -->

                    <!-- Learning Card -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="learning-card">
                            <img src="@/asset/img/sejarah.jpg" alt="Sejarah" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Sejarah</h3>
                                <p>Pelajari peristiwa penting yang membentuk dunia kita hari ini.</p>
                                <Link href="/sejarah-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Learning Card -->

                    <!-- Learning Card -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="learning-card">
                            <img src="@/asset/img/code.jpg" alt="Pemrograman" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Pemrograman</h3>
                                <p>Belajar coding mulai dari dasar hingga mahir dengan panduan lengkap.</p>
                                <Link href="/programming-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Learning Card -->

                </div>
            </div>
        </section><!-- /Pembelajaran Section -->
    </GuestLayout>
</template>

<style scoped>
.blue-background {
    background-color: #e3f2fd;
    color: #212529;
    padding: 60px 0;
}

.section-title h2 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #0277bd;
}

.section-title p {
    font-size: 1.1rem;
    color: #01579b;
}

.learning-card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    position: relative;
}

.learning-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: opacity 0.3s ease;
}

.learning-card:hover .card-img-top {
    opacity: 0.9;
}

.card-body {
    padding: 20px;
    text-align: center;
}

.card-title {
    font-size: 1.6rem;
    color: #0277bd;
    margin-bottom: 10px;
    font-weight: 500;
}

.card-body p {
    font-size: 1rem;
    color: #616161;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #0277bd;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background-color: #01579b;
    transform: scale(1.05);
}
</style>
