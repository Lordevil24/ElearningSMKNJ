<template>
  <Head title="Data Kelas" />
  <AdminLayout>
      <!-- Data Kelas Section -->
      <section id="data-kelas-section" class="data-kelas-section gradient-background">
      
          <!-- Section Title -->
          <div class="container section-title mt-5 text-center" data-aos="fade-up">
              <h2 class="text-primary">Data Kelas</h2>
              <p class="text-muted">Informasi lengkap mengenai kelas yang ada di sekolah.</p>
          </div><!-- End Section Title -->

          <!-- Tambah Kelas Button -->
          <div class="container mt-4 d-flex justify-content-center" data-aos="fade-up">
              <button class="btn btn-primary mb-3" @click="openAddModal">Tambah Kelas</button>
          </div>
          
          <!-- Tabel Data Kelas -->
          <div class="container" data-aos="fade-up" data-aos-delay="100">
              <div class="table-responsive">
                  <table class="table table-bordered shadow-lg custom-table">
                      <thead class="thead-dark">
                          <tr>
                              <th style="border-radius: 10px 0 0 0;">Kelas</th>
                              <th>Jurusan</th>
                              <th>Wali Kelas</th>
                              <th style="border-radius: 0 10px 0 0;">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="(kelas, index) in dataKelas" :key="index">
                              <td>{{ kelas.kelas }}</td>
                              <td>{{ kelas.jurusan }}</td>
                              <td>{{ kelas.waliKelas }}</td>
                              <td>
                                  <button @click="openEditModal(index)" class="btn btn-warning btn-sm me-2">Edit</button>
                                  <button @click="openDeleteModal(index)" class="btn btn-danger btn-sm">Hapus</button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div><!-- End Tabel Data Kelas -->
      </section><!-- /Data Kelas Section -->

      <!-- Modal Tambah Kelas -->
      <div v-if="addModal" class="modal fade show d-block" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title text-white">Tambah Data Kelas</h5>
                      <button type="button" class="btn-close" @click="addModal = false"></button>
                  </div>
                  <div class="modal-body">
                      <form @submit.prevent="addKelas">
                          <!-- Kelas -->
                          <div class="mb-3">
                              <label for="kelas" class="form-label">Kelas</label>
                              <input v-model="userData.kelas" type="text" class="form-control" id="kelas" required>
                          </div>

                          <!-- Jurusan -->
                          <div class="mb-3">
                              <label for="jurusan" class="form-label">Jurusan</label>
                              <input v-model="userData.jurusan" type="text" class="form-control" id="jurusan" required>
                          </div>

                          <!-- Wali Kelas -->
                          <div class="mb-3">
                              <label for="waliKelas" class="form-label">Wali Kelas</label>
                              <input v-model="userData.waliKelas" type="text" class="form-control" id="waliKelas" required>
                          </div>

                          <!-- Submit Button -->
                          <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div><!-- End Modal Tambah Kelas -->
  </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

// Contoh data kelas (bisa diambil dari API)
const dataKelas = ref([
  { kelas: 'X RPL', jurusan: 'RPL', waliKelas: 'Bapak Andi' },
  { kelas: 'X TKJ', jurusan: 'TKJ', waliKelas: 'Ibu Siti' },
  { kelas: 'XI TKR', jurusan: 'TKR', waliKelas: 'Bapak Budi' },
  { kelas: 'XI RPL', jurusan: 'RPL', waliKelas: 'Bapak Dedi' },
  { kelas: 'XII TKJ', jurusan: 'TKJ', waliKelas: 'Ibu Endah' },
]);

const userData = ref({ kelas: '', jurusan: '', waliKelas: '' });
const currentIndex = ref(null);
const editModal = ref(false);
const deleteModal = ref(false);
const addModal = ref(false);

const openEditModal = (index) => {
  userData.value = { ...dataKelas.value[index] };
  currentIndex.value = index;
  editModal.value = true;
};

const openDeleteModal = (index) => {
  currentIndex.value = index;
  deleteModal.value = true;
};

const openAddModal = () => {
  userData.value = { kelas: '', jurusan: '', waliKelas: '' };
  addModal.value = true;
};

const saveEdit = () => {
  Object.assign(dataKelas.value[currentIndex.value], userData.value);
  alert('Data kelas berhasil diperbarui!');
  editModal.value = false;
};

const addKelas = () => {
  dataKelas.value.push({ ...userData.value });
  alert('Kelas berhasil ditambahkan!');
  addModal.value = false;
};

const deleteKelas = () => {
  dataKelas.value.splice(currentIndex.value, 1);
  alert('Kelas berhasil dihapus!');
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

.btn-success {
  background-color: #5cb85c;
  border: none;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-success:hover {
  background-color: #4cae4c;
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
  border: none;
  color: #212529;
}
</style>
