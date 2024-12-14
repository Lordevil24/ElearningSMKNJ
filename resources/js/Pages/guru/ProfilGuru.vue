<script setup>
import { ref } from 'vue';
import GuestLayout from '@/Layouts/GuruLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

// Initial data for the form (this can be fetched from an API if needed)
const guruData = ref({
    nama: 'Nama Guru',
    jabatan: 'Guru RPL',
    deskripsi: 'Guru ini mengajar di jurusan RPL dengan pengalaman lebih dari 10 tahun.'
});

const saveProfile = () => {
    // Here you would send the updated profile data to the server
    // Example: axios.put('/api/guru/profile', guruData.value)
    alert("Profil guru berhasil diperbarui!");
};
</script>

<template>
    <Head title="Edit Profil Guru" />
    <GuestLayout>
        <!-- Edit Profil Guru Section -->
        <section id="edit-guru-profile-section" class="edit-guru-profile-section custom-background">
        
            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary fw-bold">Edit Profil Guru</h2>
                <p class="text-muted">Ubah informasi profil Anda dengan mudah.</p>
            </div><!-- End Section Title -->
            
            <!-- Edit Profile Form -->
            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="card profile-card shadow-lg">
                            <div class="card-header text-center bg-primary text-white">
                                <h4 class="text-white fw-bold">Edit Profil</h4>
                            </div>
                            <div class="card-body">
                                <form @submit.prevent="saveProfile">
                                    <!-- Nama Guru -->
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Guru</label>
                                        <input v-model="guruData.nama" type="text" class="form-control" id="nama" placeholder="Nama Guru" required>
                                    </div>

                                    <!-- Jabatan Guru -->
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <input v-model="guruData.jabatan" type="text" class="form-control" id="jabatan" placeholder="Jabatan" required>
                                    </div>

                                    <!-- Deskripsi Guru -->
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea v-model="guruData.deskripsi" class="form-control" id="deskripsi" rows="4" placeholder="Deskripsi singkat tentang guru" required></textarea>
                                    </div>

                                    <!-- Save Button -->
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Edit Profile Form -->

                </div>
            </div>
        </section><!-- /Edit Profil Guru Section -->
    </GuestLayout>
</template>

<style scoped>
.custom-background {
    background-color: #f0f8ff;
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

.profile-card {
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    padding: 20px;
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
