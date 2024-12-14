<script setup>
import GuruLayout from '@/Layouts/GuruLayout.vue';
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

// Initial data for the form (this can be fetched from an API if needed)
const ujianData = ref({
    namaUjian: '',
    mataPelajaran: '',
    tanggalUjian: '',
    waktuMulai: '',
    waktuSelesai: '',
    deskripsi: ''
});

const submitForm = () => {
    // Logic to submit the form data
    console.log('Form submitted:', ujianData.value);
    alert('Ujian berhasil ditambahkan!');
};
</script>

<template>
    <Head title="Input Ujian" />
    <GuruLayout>
        <!-- Input Ujian Section -->
        <section id="input-ujian-section" class="input-ujian-section gradient-background">
        
            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Input Ujian</h2>
                <p class="text-muted">Isi form berikut untuk menambahkan ujian baru.</p>
            </div><!-- End Section Title -->
            
            <!-- Input Ujian Form -->
            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="card ujian-card shadow-lg">
                            <div class="card-header text-center bg-gradient-primary text-white">
                                <h4 class="text-white fw-bold">Form Input Ujian</h4>
                            </div>
                            <div class="card-body">
                                <form @submit.prevent="submitForm">
                                    <!-- Nama Ujian -->
                                    <div class="mb-3">
                                        <label for="namaUjian" class="form-label">Nama Ujian</label>
                                        <input v-model="ujianData.namaUjian" type="text" class="form-control" id="namaUjian" placeholder="Nama Ujian" required>
                                    </div>

                                    <!-- Mata Pelajaran -->
                                    <div class="mb-3">
                                        <label for="mataPelajaran" class="form-label">Mata Pelajaran</label>
                                        <input v-model="ujianData.mataPelajaran" type="text" class="form-control" id="mataPelajaran" placeholder="Mata Pelajaran" required>
                                    </div>

                                    <!-- Tanggal Ujian -->
                                    <div class="mb-3">
                                        <label for="tanggalUjian" class="form-label">Tanggal Ujian</label>
                                        <input v-model="ujianData.tanggalUjian" type="date" class="form-control" id="tanggalUjian" required>
                                    </div>

                                    <!-- Waktu Mulai -->
                                    <div class="mb-3">
                                        <label for="waktuMulai" class="form-label">Waktu Mulai</label>
                                        <input v-model="ujianData.waktuMulai" type="time" class="form-control" id="waktuMulai" required>
                                    </div>

                                    <!-- Waktu Selesai -->
                                    <div class="mb-3">
                                        <label for="waktuSelesai" class="form-label">Waktu Selesai</label>
                                        <input v-model="ujianData.waktuSelesai" type="time" class="form-control" id="waktuSelesai" required>
                                    </div>

                                    <!-- Deskripsi -->
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea v-model="ujianData.deskripsi" class="form-control" id="deskripsi" rows="4" placeholder="Deskripsi singkat tentang ujian" required></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Simpan Ujian</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Input Ujian Form -->

                </div>
            </div>
        </section><!-- /Input Ujian Section -->
    </GuruLayout>
</template>

<style scoped>
.gradient-background {
    background: linear-gradient(to right, #e3f2fd, #bbdefb);
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

.ujian-card {
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    padding: 20px;
    background: linear-gradient(90deg, #007bff, #0056b3);
}

.card-body {
    padding: 30px;
}

.form-label {
    font-weight: 500;
    color: #0277bd;
}

.form-control {
    border-radius: 10px;
    border: 1px solid #ced4da;
    padding: 15px;
    font-size: 1rem;
}

.btn-primary {
    background-color: #0277bd;
    color: #fff;
    border: none;
    padding: 15px;
    font-size: 1rem;
    border-radius: 10px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background-color: #01579b;
    transform: scale(1.05);
}

.d-grid {
    display: grid;
    gap: 10px;
}
</style>
