<script setup>
import AuthenticatedLayout from '@/Layouts/GuruLayout.vue';
import { Head } from '@inertiajs/vue3';

// Contoh data jadwal mengajar (bisa diambil dari API)
const jadwalMengajar = [
    { hari: 'Senin', jam: '08:00 - 10:00', mataPelajaran: 'Matematika', kelas: 'X-1' },
    { hari: 'Senin', jam: '10:30 - 12:00', mataPelajaran: 'Fisika', kelas: 'X-2' },
    { hari: 'Selasa', jam: '09:00 - 10:30', mataPelajaran: 'Kimia', kelas: 'XI-1' },
    { hari: 'Rabu', jam: '08:00 - 10:00', mataPelajaran: 'Biologi', kelas: 'X-1' },
    { hari: 'Kamis', jam: '08:00 - 10:00', mataPelajaran: 'Bahasa Inggris', kelas: 'XI-2' },
    { hari: 'Jumat', jam: '10:00 - 11:30', mataPelajaran: 'Sejarah', kelas: 'XII-1' },
];
</script>

<template>
    <Head title="Jadwal Mengajar" />

    <AuthenticatedLayout>
        <!-- Jadwal Mengajar Section -->
        <section id="jadwal-mengajar-section" class="jadwal-mengajar-section blue-background">

            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Jadwal Mengajar</h2>
                <p class="text-muted">Lihat jadwal mengajar Anda minggu ini.</p>
            </div><!-- End Section Title -->

            <!-- Jadwal Table -->
            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="table-responsive" >
                            <table class="table table-bordered shadow-lg custom-table">
                                    <thead class="thead-dark" >
                                    <tr> 
                                        <th style="border-radius: 5px 0 0 0;">Hari</th>
                                        <th>Jam</th>
                                        <th>Mata Pelajaran</th>
                                        <th style="border-radius: 0 5px 0 0;">Kelas</th>
                                    </tr>
                                </thead>
                                
                                <tbody >
                                    <tr v-for="(jadwal, index) in jadwalMengajar" :key="index">
                                        <td>{{ jadwal.hari }}</td>
                                        <td>{{ jadwal.jam }}</td>
                                        <td>{{ jadwal.mataPelajaran }}</td>
                                        <td>{{ jadwal.kelas }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div><!-- End Jadwal Table -->
        </section><!-- /Jadwal Mengajar Section -->
    </AuthenticatedLayout>
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

.custom-table {
    border-collapse: separate;
    border-spacing: 0 15px;
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
    background-color: #6d6d6d;
}

tr:hover td {
    background-color: #f6f6f6;
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
</style>
