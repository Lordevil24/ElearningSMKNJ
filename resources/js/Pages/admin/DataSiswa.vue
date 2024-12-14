<template>
    <Head title="Data Siswa" />
    <AdminLayout>
        <!-- Data Siswa Section -->
        <section id="data-siswa-section" class="data-siswa-section gradient-background">
            
            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Data Siswa</h2>
                <p class="text-muted">Informasi lengkap mengenai siswa di sekolah.</p>
            </div><!-- End Section Title -->
            
            <!-- Tabel Data Siswa -->
            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex justify-content-center mb-3">
                    <button @click="openAddModal" class="btn btn-primary">Tambah Siswa</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered shadow-lg custom-table">
                        <thead class="thead-dark">
                            <tr>
                                <th style="border-radius: 10px 0 0 0;">NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th style="border-radius: 0 10px 0 0;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(siswa, index) in dataSiswa" :key="index">
                                <td>{{ siswa.nisn }}</td>
                                <td>{{ siswa.nama }}</td>
                                <td>{{ siswa.kelas }}</td>
                                <td>
                                    <button @click="openEditModal(index)" class="btn btn-warning btn-sm me-2">Edit</button>
                                    <button @click="openDeleteModal(index)" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- End Tabel Data Siswa -->
        </section><!-- /Data Siswa Section -->

        <!-- Modal Tambah Siswa -->
        <div v-if="addModal" class="modal fade show d-block" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Siswa</h5>
                        <button type="button" class="btn-close" @click="addModal = false"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="addSiswa">
                            <!-- NISN -->
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input v-model="newSiswa.nisn" type="text" class="form-control" id="nisn" required>
                            </div>

                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input v-model="newSiswa.nama" type="text" class="form-control" id="nama" required>
                            </div>

                            <!-- Kelas -->
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input v-model="newSiswa.kelas" type="text" class="form-control" id="kelas" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Modal Tambah Siswa -->

        <!-- Modal Hapus Siswa -->
        <div v-if="deleteModal" class="modal fade show d-block" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Siswa</h5>
                        <button type="button" class="btn-close" @click="deleteModal = false"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data siswa ini?</p>
                        <div class="d-flex justify-content-end">
                            <button @click="deleteModal = false" class="btn btn-secondary me-2">Batal</button>
                            <button @click="deleteSiswa" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Modal Hapus Siswa -->
    </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

// Contoh data siswa (bisa diambil dari API)
const dataSiswa = ref([
    { nisn: '123456789', nama: 'Ahmad', kelas: 'X RPL' },
    { nisn: '987654321', nama: 'Siti', kelas: 'XI TKJ' },
    { nisn: '456123789', nama: 'Budi', kelas: 'XII DKV' },
]);

const newSiswa = ref({ nisn: '', nama: '', kelas: '' });
const currentIndex = ref(null);
const addModal = ref(false);
const deleteModal = ref(false);

const openAddModal = () => {
    newSiswa.value = { nisn: '', nama: '', kelas: '' };
    addModal.value = true;
};

const openDeleteModal = (index) => {
    currentIndex.value = index;
    deleteModal.value = true;
};

const addSiswa = () => {
    dataSiswa.value.push({ ...newSiswa.value });
    alert('Siswa berhasil ditambahkan!');
    addModal.value = false;
};

const deleteSiswa = () => {
    dataSiswa.value.splice(currentIndex.value, 1);
    alert('Siswa berhasil dihapus!');
    deleteModal.value = false;
};
</script>

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

.custom-table {
    border-collapse: separate;
    border-spacing: 0 15px;
    margin-top: 20px;
}

.table thead th {
    background-color: #0277bd;
    color: white;
    border: none;
    padding: 15px;
    text-align: center;
}

.table tbody td {
    padding: 15px;
    text-align: center;
    border: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.btn-success {
    background-color: #5cb85c;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-success:hover {
    background-color: #4cae4c;
    transform: scale(1.05);
}
</style>
