<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";

defineProps({
    user: Object,
});

const { props } = usePage();
const csrfToken = props.csrf_token;
</script>

<template>
    <Head title="Edit Pengguna" />
    <AdminLayout>
        <section class="edit-user-section gradient-background">
            <div class="container section-title mt-5 text-center">
                <h2 class="text-primary">Edit Pengguna</h2>
                <p class="text-muted">Perbarui data pengguna.</p>
            </div>

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <form
                                    :action="
                                        route('master.siswa.update', user.id)
                                    "
                                    method="POST"
                                >
                                    <input
                                        type="hidden"
                                        name="_method"
                                        value="PUT"
                                    />
                                    <input
                                        type="hidden"
                                        name="_token"
                                        :value="csrfToken"
                                    />
                                    <div class="mb-3">
                                        <label for="name" class="form-label"
                                            >Nama</label
                                        >
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            class="form-control"
                                            :value="user.name"
                                            required
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label"
                                            >Email</label
                                        >
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            class="form-control"
                                            :value="user.email"
                                            required
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label for="role" class="form-label"
                                            >Role</label
                                        >
                                        <select
                                            id="role"
                                            name="role"
                                            class="form-control"
                                            required
                                        >
                                            <option
                                                value="admin"
                                                :selected="
                                                    user.role === 'admin'
                                                "
                                            >
                                                Admin
                                            </option>
                                            <option
                                                value="siswa"
                                                :selected="user.role === 'user'"
                                            >
                                                Siswa
                                            </option>
                                            <option
                                                value="guru"
                                                :selected="user.role === 'guru'"
                                            >
                                                Guru
                                            </option>
                                            <option
                                                value="kosong"
                                                :selected="
                                                    user.role === 'kosong'
                                                "
                                            >
                                                Kosong
                                            </option>
                                        </select>
                                    </div>

                                    <div class="d-grid">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Simpan
                                        </button>
                                        <Link
                                            :href="route('master.siswa')"
                                            class="btn btn-secondary"
                                            >Batal</Link
                                        >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AdminLayout>
</template>

<style scoped>
.gradient-background {
    background: linear-gradient(to right, #e3f2fd, #bbdefb);
    color: #212529;
    padding: 60px 0;
}

.card {
    border-radius: 10px;
    padding: 20px;
}

.d-grid {
    display: grid;
    gap: 15px;
}
</style>
