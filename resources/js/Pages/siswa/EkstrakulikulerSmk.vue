<script setup>
import GuestLayout from '@/Layouts/StudentLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Daftar Ekstrakurikuler" />
    <GuestLayout>
        <!-- Ekstrakurikuler Section -->
        <section id="extracurricular" class="extracurricular section dark-background">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <h2 class="text-dark">Daftar Ekstrakurikuler SMK Nurul Jadid</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="extracurricular-card">
                            <img src="/images/pramuka.jpg" alt="Pramuka" class="card-img-top">
                            <div class="card-header text-center">
                                <h3>Pramuka</h3>
                            </div>
                            <div class="card-body">
                                <p>Kegiatan yang membangun kemandirian, disiplin, dan kerja sama melalui aktivitas luar ruangan.</p>
                            </div>
                            <div class="card-footer text-center">
                                <Link href="/pramuka-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Extracurricular Card -->

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="extracurricular-card">
                            <img src="/images/futsal.jpg" alt="Futsal" class="card-img-top">
                            <div class="card-header text-center">
                                <h3>Futsal</h3>
                            </div>
                            <div class="card-body">
                                <p>Ekstrakurikuler olahraga untuk mengasah kemampuan bermain futsal dan meningkatkan kebugaran tubuh.</p>
                            </div>
                            <div class="card-footer text-center">
                                <Link href="/futsal-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Extracurricular Card -->


                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="extracurricular-card">
                            <img src="/images/paskibra.jpg" alt="Paskibra" class="card-img-top">
                            <div class="card-header text-center">
                                <h3>Paskibra</h3>
                            </div>
                            <div class="card-body">
                                <p>Melatih kedisiplinan dan kepemimpinan melalui kegiatan baris-berbaris dan upacara bendera.</p>
                            </div>
                            <div class="card-footer text-center">
                                <Link href="/paskibra-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Extracurricular Card -->

                </div>

            </div>


        </section><!-- /Ekstrakurikuler Section -->
    </GuestLayout>
</template>

<style>
.dark-background {
    background-color: #ffffff;
    color: #f8f9fa;
    padding: 50px 0;
}

.extracurricular-card {
    background: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.extracurricular-card:hover {
    transform: scale(1.05);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

.card-header {
    background: #007bff;
    color: #ffffff;
    padding: 15px;
}

.card-body {
    padding: 20px;
    color: black;
}

.card-footer {
    background: #f8f9fa;
    padding: 15px;
}

.card-footer .btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    transition: background-color 0.3s ease;
}

.card-footer .btn:hover {
    background-color: #0056b3;
}
</style>
