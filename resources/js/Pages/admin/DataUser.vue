<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

// Initial data for the form
const userData = ref({
    nama: '',
    email: '',
    role: ''
});

const users = ref([
    { nama: 'Ali', email: 'ali@example.com', role: 'Admin' },
    { nama: 'Budi', email: 'budi@example.com', role: 'Guru' },
    { nama: 'Citra', email: 'citra@example.com', role: 'Siswa' },
]);

const newUserModal = ref(false);

const submitForm = () => {
    users.value.push({ ...userData.value });
    alert('User berhasil ditambahkan!');
    userData.value = { nama: '', email: '', role: '' };
    newUserModal.value = false;
};

const editUser = (index) => {
    userData.value = { ...users.value[index] };
    newUserModal.value = true;
};

const deleteUser = (index) => {
    users.value.splice(index, 1);
    alert('User berhasil dihapus!');
};
</script>

<template>
    <Head title="Manajemen Pengguna" />
    <AdminLayout>
        <!-- Manajemen Pengguna Section -->
        <section id="manajemen-pengguna-section" class="manajemen-pengguna-section gradient-background">
        
            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Manajemen Pengguna</h2>
                <p class="text-muted">Tambahkan pengguna baru dan lihat daftar pengguna yang terdaftar.</p>
            </div><!-- End Section Title -->
            
            <!-- Tabel Pengguna -->
            <div class="container mt-5" data-aos="fade-up" data-aos-delay="300">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table table-bordered shadow-lg custom-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="border-radius: 10px 0 0 0 ;">Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th style="border-radius: 0 10px 0 0  ;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(user, index) in users" :key="index">
                                        <td>{{ user.nama }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.role }}</td>
                                        <td>
                                            <button @click="editUser(index)" class="btn btn-warning btn-sm me-2">Edit</button>
                                            <button @click="deleteUser(index)" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- End Tabel Pengguna -->
        </section><!-- /Manajemen Pengguna Section -->
        <div v-if="newUserModal" class="modal fade show d-block" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-3 shadow-lg">
            <div class="modal-header bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-600 text-white border-0 rounded-top position-relative">
                <h5 class="modal-title text-white">Form Input Pengguna</h5>
                <button type="button" class="close text-white position-absolute top-0 end-0 p-3" @click="newUserModal = false">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body p-4 bg-light rounded-bottom">
                <form @submit.prevent="submitForm">
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label text-dark font-weight-bold">Nama</label>
                        <input v-model="userData.nama" type="text" class="form-control form-control-lg shadow-sm border-0 rounded-3" id="nama" placeholder="Nama Pengguna" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-dark font-weight-bold">Email</label>
                        <input v-model="userData.email" type="email" class="form-control form-control-lg shadow-sm border-0 rounded-3" id="email" placeholder="Email Pengguna" required>
                    </div>

                    <!-- Role -->
                    <div class="mb-3">
                        <label for="role" class="form-label text-dark font-weight-bold">Role</label>
                        <select v-model="userData.role" class="form-control form-control-lg shadow-sm border-0 rounded-3" id="role" required>
                            <option value="" disabled>Pilih Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Guru">Guru</option>
                            <option value="Siswa">Siswa</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">Simpan Pengguna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



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

.user-card {
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

.d-grid {
    display: grid;
    gap: 10px;
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
    border-bottom: 1px solid #e9ecef;
    background: linear-gradient(90deg, #007bff, #0056b3);
    color: white;
}

.modal-body {
    padding: 20px;
}

.modal-title {
    margin: 0;
    line-height: 1.5;
}

.close {
    color: white;
    opacity: 1;
}

.close span {
    font-size: 1.5rem;
}
</style>
