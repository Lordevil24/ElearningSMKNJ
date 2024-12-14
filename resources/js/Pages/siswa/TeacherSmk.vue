<script setup>
import StudentLayout from '@/Layouts/StudentLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Kontak Kami" />
    <StudentLayout>


        <section id="teachers" class="teachers section light-background">

<!-- Section Title -->
<div class="container section-title mt-5" data-aos="fade-up">
    <h2>Guru SMK Nurul Jadid</h2>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="teacher-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-image">
                    <img src="teacher-photo.jpg" alt="Guru SMK Nurul Jadid" class="img-fluid">
                </div>
                <div class="card-content">
                    <h3 class="teacher-name">M. Khoirul Millah</h3>
                    <h5 class="teacher-subject">Rekayasa Perangkat Lunak</h5>
                    <p class="teacher-description">Guru yang berpengalaman dalam pengembangan perangkat lunak dan
                        memiliki dedikasi tinggi terhadap pendidikan teknologi.</p>
                    <a href="#" class="btn btn-primary">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>

</div>

</section>
    </StudentLayout>
</template>

<style scoped>
.teachers .teacher-card {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

.teachers .teacher-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.teachers .card-image img {
    width: 100%;
    border-bottom: 2px solid #ddd;
}

.teachers .card-content {
    padding: 20px;
    text-align: center;
}

.teachers .teacher-name {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.teachers .teacher-subject {
    font-size: 1.2rem;
    color: #007bff;
    margin-bottom: 15px;
}

.teachers .teacher-description {
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
}

.teachers .btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.teachers .btn:hover {
    background-color: #0056b3;
}
</style>
