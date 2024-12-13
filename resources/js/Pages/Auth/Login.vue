<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

    <Head title="Log in" />

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form @submit.prevent="submit">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email address</label>
                            <input type="email" id="email" v-model="form.email" required autofocus
                                class="form-control form-control-lg" placeholder="Enter a valid email address"
                                autocomplete="username" />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Enter password" v-model="form.password" required
                                autocomplete="current-password" />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Log in
                            </PrimaryButton>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a :href="route('register')" class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>
