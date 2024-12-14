<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <Link :href="route('home')" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="assets/img/logo_3.png" alt="">
            </Link>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><Link :href="route('home')" class="active">Beranda</Link></li>
                    <li><Link :href="route('user')">Data User</Link></li>
                    <li><Link :href="route('guru')">Data Guru</Link></li>
                    <li><Link :href="route('siswa')">Data Siswa</Link></li>  
                    <li><Link :href="route('kelas')">Data Kelas</Link></li>  
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <Link class="btn-getstarted" :href="route('logout')"
                                method="post"
                                as="button">Logout</Link>
        </div>
    </header>


    <main class="main">
        <slot/>
    </main>

    <footer id="footer" class="footer">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">iLanding</strong> <span>All Rights Reserved</span>
            </p>
        </div>

    </footer>
</template>
