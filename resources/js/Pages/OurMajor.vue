<script setup>
import GuestLayout from '@/Layouts/StudentLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Daftar Jurusan" />
    <GuestLayout>
        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <h2>Daftar Jurusan SMK Nurul Jadid</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-lightning"></i>
                            </div>
                            <div>
                                <h3>Teknik Pembangkit Tenaga Listrik (TPTL)</h3>
                                <p>Program keahlian yang fokus pada teknik pengelasan dan kelistrikan untuk mendukung
                                    industri modern.</p>
                                <a href="tptl-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div>
                                <h3>Rekayasa Perangkat Lunak (RPL)</h3>
                                <p>Program keahlian yang mengajarkan pengembangan perangkat lunak mulai dari coding
                                    hingga deployment.</p>
                                <a href="rpl-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-palette"></i>
                            </div>
                            <div>
                                <h3>Desain Komunikasi Visual (DKV)</h3>
                                <p>Program keahlian yang menekankan desain grafis, animasi, dan multimedia untuk dunia
                                    kreatif.</p>
                                <a href="dkv-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-router"></i>
                            </div>
                            <div>
                                <h3>Teknik Komputer dan Jaringan (TKJ)</h3>
                                <p>Program keahlian yang mengajarkan perancangan, pengelolaan, dan perawatan jaringan
                                    komputer.</p>
                                <a href="tkj-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                </div>

            </div>


        </section><!-- /Services Section -->
    </GuestLayout>
</template>
