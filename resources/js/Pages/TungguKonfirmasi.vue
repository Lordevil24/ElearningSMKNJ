<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Tunggu Konfirmasi" />

    <div class="d-flex items-center justify-center h-screen">
        <h1 class="text-2xl font-bold">Mohon Tunggu Konfirmasi Dari Admin</h1>
        <div class="mt-1 ms-2 text-danger">
            <Link :href="route('logout')" method="post" as="button">
                <u>Logout</u>
            </Link>
        </div>
    </div>
</template>
