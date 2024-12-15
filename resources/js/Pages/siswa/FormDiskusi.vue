<script setup>
import GuestLayout from '@/Layouts/StudentLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const discussion = ref({
    title: '',
    message: ''
});

const submitForm = () => {
    // Logika pengiriman form
    console.log('Form submitted:', discussion.value);
};
</script>

<template>
    <Head title="Form Diskusi" />
    <GuestLayout>
        <!-- Diskusi Section -->
        <section id="discussion-section" class="discussion-section blue-background">
            <!-- Section Title -->
            <div class="container section-title mt-5 text-center" data-aos="fade-up">
                <h2 class="text-primary">Form Diskusi Siswa X RPL</h2>
                <p class="text-muted">Sampaikan pertanyaan dan pendapat Anda di forum diskusi ini.</p>
            </div><!-- End Section Title -->

            <div class="container mt-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow">
                            <div class="card-body">
                                <form @submit.prevent="submitForm">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul Diskusi</label>
                                        <input type="text" id="title" v-model="discussion.title" class="form-control" placeholder="Masukkan judul diskusi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Pesan</label>
                                        <textarea id="message" v-model="discussion.message" class="form-control" rows="5" placeholder="Masukkan pesan Anda" required></textarea>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Diskusi Section -->
    </GuestLayout>
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

.card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
}

.form-label {
    font-weight: 500;
    color: #0277bd;
}

.form-control {
    border-radius: 5px;
    border: 1px solid #ced4da;
    padding: 10px;
    font-size: 1rem;
}

.btn-primary {
    background-color: #0277bd;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
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
