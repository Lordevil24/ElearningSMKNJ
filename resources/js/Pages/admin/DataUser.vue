<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";

defineProps({
    users: Array,
});
const {
    props: { flash, csrf_token: csrfToken },
} = usePage();
</script>

<template>
    <Head title="Manajemen Pengguna" />
    <AdminLayout>
        <!-- Manajemen Pengguna Section -->
        <section
            id="manajemen-pengguna-section"
            class="manajemen-pengguna-section gradient-background"
        >
            <!-- Section Title -->
            <div
                class="container section-title mt-5 text-center"
                data-aos="fade-up"
            >
                <h2 class="text-primary">Manajemen Pengguna</h2>
                <p class="text-muted">
                    Tambahkan pengguna baru dan lihat daftar pengguna yang
                    terdaftar.
                </p>
                <div v-if="flash?.success" class="alert alert-success">
                    {{ flash.success }}
                </div>
            </div>
            <!-- End Section Title -->

            <!-- Tabel Pengguna -->
            <div class="container mt-5" data-aos="fade-up" data-aos-delay="300">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered shadow-lg custom-table"
                            >
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="border-radius: 10px 0 0 0">
                                            Nama
                                        </th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th style="border-radius: 0 10px 0 0">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="user in users" :key="user.id">
                                        <td>{{ user.name }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.role || "N/A" }}</td>
                                        <td>
                                            <!-- Tambahkan aksi seperti Edit atau Hapus -->
                                            <Link
                                                :href="
                                                    route(
                                                        'master.user.edit',
                                                        user.id
                                                    )
                                                "
                                                class="btn btn-primary btn-sm me-2"
                                            >
                                                Edit
                                            </Link>
                                            <form
                                                :action="
                                                    route(
                                                        'master.user.destroy',
                                                        user.id
                                                    )
                                                "
                                                method="POST"
                                                class="d-inline"
                                            >
                                                <input
                                                    type="hidden"
                                                    name="_method"
                                                    value="DELETE"
                                                />
                                                <input
                                                    type="hidden"
                                                    name="_token"
                                                    :value="csrfToken"
                                                />
                                                <button
                                                    type="submit"
                                                    class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tabel Pengguna -->
        </section>
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
