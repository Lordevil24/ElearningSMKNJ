<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<style scoped>
.divider:after,
.divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
}

.h-custom {
    height: calc(100% - 73px);
}

@media (max-width: 450px) {
    .h-custom {
        height: 100%;
    }
}
</style>

<template>


    <Head title="Register" />

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
                        <div  class="form-outline mb-4">
                            <input type="text" id="name" class="form-control form-control-lg"
                                placeholder="Masukkan Nama lengkap anda" v-model="form.name" required autofocus
                                autocomplete="name" />
                            <InputError class="mt-2" :message="form.errors.name" />
                            <label class="form-label">Nama lengkap</label>
                        </div>

                        <div  class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" v-model="form.email" required autofocus autocomplete="username" />
                            <InputError class="mt-2" :message="form.errors.email" />
                            <label class="form-label">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div  class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Enter password" v-model="form.password" required
                                autocomplete="new-password" />
                                <InputError class="mt-2" :message="form.errors.password" />
                            <label class="form-label">Password</label>
                        </div>

                        <div  class="form-outline mb-3">
                            <input type="password" id="password_confirmation" class="form-control form-control-lg"
                                placeholder="Konfirmansi password" v-model="form.password_confirmation" required
                                autocomplete="new-password" />
                                <InputError class="mt-2" :message="form.errors.password_confirmation" />
                            <label class="form-label">Password</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">

                            <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Register
                            </PrimaryButton>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a :href="route('login')"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</template>
