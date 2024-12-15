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
                    <li><Link :href="route('teachers')">Guru</Link></li>
                    <li><Link :href="route('majors')">Jurusan</Link></li>
                    <li><Link :href="route('ekstra')">Ekstrakurikuler</Link></li>
                    <li class="dropdown"><a href="#"><span>Pembelajaran</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><Link :href="route('class')">Kelas</Link></li>
                            <li><Link :href="route('pembelajaran')">Materi Pembelajaran</Link></li>
                            <li><Link :href="route('diksusi')">Forum Diskusi</Link></li>
                            <li><a href="#">Ujian Sekolah</a></li>
                        </ul>
                    </li>   
                    <li><Link :href="route('contact-us')">Kontak Kami</Link></li>
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
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <Link :href="route('home')" class="logo d-flex align-items-center">
                        <span class="sitename"><img src="assets/img/logo_3.png" alt=""></span>
                    </Link>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><Link :href="route('home')">Home</Link></li>
                        <li><a href="#about">Guru SMK</a></li>
                        <li><Link :href="route('majors')">Jurusan</Link></li>
                        <li><a href="#features">Ekstrakurikuler</a></li>
                        <li><Link :href="route('contact-us')">Kontak Kami</Link></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Pembelajaran</h4>
                    <ul>
                        <li><a href="#">Kelas</a></li>
                        <li><a href="#">Materi Pembelajaran</a></li>
                        <li><a href="#">Forum Diskusi</a></li>
                        <li><a href="#">Ujian Sekolah</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Informasi Kontak</h4>
                    <ul>
                        <li><p>A108 Adam Street, New York, NY 535022</p></li>
                        <li><p><strong>Phone:</strong> +1 5589 55488 55</p></li>
                        <li><p><strong>Email:</strong> info@example.com</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">E-Learning SMKNJ</strong> <span>All Rights Reserved</span></p>       
        </div>
    </footer>
</template>
