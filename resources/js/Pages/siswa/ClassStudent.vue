<script setup>
import GuestLayout from '@/Layouts/StudentLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Kelas Saya" />
    <GuestLayout>
        <!-- Kelas Section -->
        <section id="class-section" class="class-section blue-background">

            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Kelas Saya di SMK Nurul Jadid</h2>
                <p class="text-muted">Akses materi dan informasi kelas Anda dengan mudah dan cepat.</p>
            </div><!-- End Section Title -->

            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                       <!-- Class Card -->
                       <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="class-card">
                            
                            <div class="card-body">
                                <h3 class="card-title">Kelas X RPL</h3>
                                <p>Akses materi dan tugas untuk Kelas X.</p>
                                <Link href="/kelas-x-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Class Card -->

                    <!-- Class Card -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="class-card">
                           
                            <div class="card-body">
                                <h3 class="card-title">Kelas XI RPL</h3>
                                <p>Akses materi dan tugas untuk Kelas XI.</p>
                                <Link href="/kelas-xi-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Class Card -->

                    <!-- Class Card -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="class-card">
                            
                            <div class="card-body">
                                <h3 class="card-title">Kelas XII RPL</h3>
                                <p>Akses materi dan tugas untuk Kelas XII.</p>
                                <Link href="/kelas-xii-details" class="btn btn-primary">Selengkapnya</Link>
                            </div>
                        </div>
                    </div><!-- End Class Card -->

                 
                </div>
            </div>
        </section><!-- /Kelas Section -->
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

.class-card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    position: relative;
}

.class-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: opacity 0.3s ease;
}

.class-card:hover .card-img-top {
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
