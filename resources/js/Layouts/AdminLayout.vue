<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
        >
            <Link
                :href="route('home')"
                class="logo d-flex align-items-center me-auto me-xl-0"
            >
                <img src="@/Asset/img/logo_3.png" alt="" />
            </Link>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><Link :href="route('master.user')" :class="{ active: route().current('master.user') }">Data User</Link></li>
                    <li><Link :href="route('master.guru')" :class="{ active: route().current('master.guru') }">Data Guru</Link></li>
                    <li><Link :href="route('master.siswa')" :class="{ active: route().current('master.siswa') }">Data Siswa</Link></li>
                    <li><Link :href="route('master.kelas')" :class="{ active: route().current('master.kelas') }">Data Kelas</Link></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <Link
                class="btn-getstarted"
                :href="route('logout')"
                method="post"
                as="button"
                >Logout</Link
            >
        </div>
    </header>

    <main class="main">
        <slot />
    </main>

    <footer id="footer" class="footer">
        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">iLanding</strong>
                <span>All Rights Reserved</span>
            </p>
        </div>
    </footer>
</template>
