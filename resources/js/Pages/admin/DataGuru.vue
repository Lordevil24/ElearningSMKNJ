<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

// Contoh data guru (bisa diambil dari API)
const dataGuru = ref([
    { nama: 'Dr. Ali Setiawan', mataPelajaran: 'Matematika', pengalaman: '10 tahun', email: 'ali@example.com' },
    { nama: 'Dr. Budi Santoso', mataPelajaran: 'Fisika', pengalaman: '8 tahun', email: 'budi@example.com' },
    { nama: 'Dr. Citra Dewi', mataPelajaran: 'Biologi', pengalaman: '12 tahun', email: 'citra@example.com' },
    { nama: 'Dr. Dedi Saputra', mataPelajaran: 'Kimia', pengalaman: '7 tahun', email: 'dedi@example.com' },
    { nama: 'Dr. Endang Rahayu', mataPelajaran: 'Bahasa Inggris', pengalaman: '15 tahun', email: 'endang@example.com' },
]);

const userData = ref({ nama: '', mataPelajaran: '', pengalaman: '', email: '' });
const currentIndex = ref(null);
const editModal = ref(false);
const deleteModal = ref(false);

const openEditModal = (index) => {
    userData.value = { ...dataGuru.value[index] };
    currentIndex.value = index;
    editModal.value = true;
};

const openDeleteModal = (index) => {
    currentIndex.value = index;
    deleteModal.value = true;
};

const saveEdit = () => {
    Object.assign(dataGuru.value[currentIndex.value], userData.value);
    alert('Data guru berhasil diperbarui!');
    editModal.value = false;
};

const deleteGuru = () => {
    dataGuru.value.splice(currentIndex.value, 1);
    alert('Guru berhasil dihapus!');
    deleteModal.value = false;
};
</script>

<template>
    <Head title="Data Guru" />
    <AdminLayout>
        <!-- Data Guru Section -->
        <section id="data-guru-section" class="data-guru-section gradient-background">
        
            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Data Guru</h2>
                <p class="text-muted">Informasi lengkap mengenai guru-guru yang mengajar di sekolah.</p>
            </div><!-- End Section Title -->
            
            <!-- Tabel Data Guru -->
            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="table-responsive">
                    <table class="table table-bordered shadow-lg custom-table">
                        <thead class="thead-dark">
                            <tr>
                                <th style="border-radius: 10px 0 0 0;">Nama</th>
                                <th>Mata Pelajaran</th>
                                <th>Pengalaman</th>
                                <th>Email</th>
                                <th style="border-radius: 0 10px 0 0;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(guru, index) in dataGuru" :key="index">
                                <td>{{ guru.nama }}</td>
                                <td>{{ guru.mataPelajaran }}</td>
                                <td>{{ guru.pengalaman }}</td>
                                <td>{{ guru.email }}</td>
                                <td>
                                    <button @click="openEditModal(index)" class="btn btn-warning btn-sm me-2">Edit</button>
                                    <button @click="openDeleteModal(index)" class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- End Tabel Data Guru -->
        </section><!-- /Data Guru Section -->

        <!-- Modal Edit Guru -->
        <div v-if="editModal" class="modal fade show d-block" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title text-white">Edit Data Guru</h5>
                        <button type="button" class="btn-close" @click="editModal = false"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="saveEdit">
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input v-model="userData.nama" type="text" class="form-control" id="nama" required>
                            </div>

                            <!-- Mata Pelajaran -->
                            <div class="mb-3">
                                <label for="mataPelajaran" class="form-label">Mata Pelajaran</label>
                                <input v-model="userData.mataPelajaran" type="text" class="form-control" id="mataPelajaran" required>
                            </div>

                            <!-- Pengalaman -->
                            <div class="mb-3">
                                <label for="pengalaman" class="form-label">Pengalaman</label>
                                <input v-model="userData.pengalaman" type="text" class="form-control" id="pengalaman" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input v-model="userData.email" type="email" class="form-control" id="email" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Modal Edit Guru -->

        <!-- Modal Hapus Guru -->
        <div v-if="deleteModal" class="modal fade show d-block" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Guru</h5>
                        <button type="button" class="btn-close" @click="deleteModal = false"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data guru ini?</p>
                        <div class="d-flex justify-content-end">
                            <button @click="deleteModal = false" class="btn btn-secondary me-2">Batal</button>
                            <button @click="deleteGuru" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Modal Hapus Guru -->
    </AdminLayout>
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

.table tbody tr {
    background-color: #fff;
    transition: background-color 0.15s ease-in-out;
    border: none;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.table tbody td {
    padding: 15px;
    text-align: center;
    border: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.shadow-lg {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.btn-warning {
    background-color: #f0ad4e;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-warning:hover {
    background-color: #ec971f;
    transform: scale(1.05);
}

.btn-danger {
    background-color: #d9534f;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-danger:hover {
    background-color: #c9302c;
    transform: scale(1.05);
}

/* Modal Styles */
.modal-dialog {
    max-width: 600px;
}

.modal-content {
    border-radius: 10px;
    overflow: hidden;
}

.modal-header {
    padding: 15px;
    background-color: #0277bd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn-close {
    color: #212529;
    font-weight: bold;
    }
</style>