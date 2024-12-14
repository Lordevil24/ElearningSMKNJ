<script setup>
import GuruLayout from '@/Layouts/GuruLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

// Contoh data materi pembelajaran (bisa diambil dari API)
const materiPembelajaran = [
    { judul: 'Materi Matematika', deskripsi: 'Konsep dasar aljabar dan geometri', link: '/materi/matematika' },
    { judul: 'Materi Fisika', deskripsi: 'Hukum Newton dan kinematika', link: '/materi/fisika' },
    { judul: 'Materi Kimia', deskripsi: 'Struktur atom dan tabel periodik', link: '/materi/kimia' },
    { judul: 'Materi Biologi', deskripsi: 'Sistem organ manusia', link: '/materi/biologi' },
    { judul: 'Materi Bahasa Inggris', deskripsi: 'Grammar dan vocabulary', link: '/materi/bahasa-inggris' },
    { judul: 'Materi Sejarah', deskripsi: 'Peristiwa penting dalam sejarah Indonesia', link: '/materi/sejarah' },
];
</script>

<template>
    <Head title="Materi Pembelajaran" />

    <GuruLayout>
        <!-- Materi Pembelajaran Section -->
        <section id="materi-pembelajaran-section" class="materi-pembelajaran-section blue-background">

            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Materi Pembelajaran</h2>
                <p class="text-muted">Akses berbagai materi pembelajaran untuk mendukung proses belajar mengajar Anda.</p>
            </div><!-- End Section Title -->

            <!-- Materi Cards -->
            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <!-- Materi Card -->
                    <div class="col-md-4" v-for="(materi, index) in materiPembelajaran" :key="index" data-aos="fade-up" :data-aos-delay="(index + 1) * 100">
                        <div class="materi-card shadow-sm">
                            <div class="card-body text-center">
                                <h3 class="card-title text-primary">{{ materi.judul }}</h3>
                                <p class="card-text">{{ materi.deskripsi }}</p>
                                <Link :href="materi.link" class="btn btn-primary">Lihat Materi</Link>
                            </div>
                        </div>
                    </div><!-- End Materi Card -->
                </div>
            </div><!-- End Materi Cards -->
        </section><!-- /Materi Pembelajaran Section -->
    </GuruLayout>
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

.materi-card {
    background: #ffffff;
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    position: relative;
    padding: 20px;
    text-align: center;
}

.materi-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-title {
    font-size: 1.6rem;
    color: #0277bd;
    margin-bottom: 10px;
    font-weight: 500;
}

.card-text {
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
