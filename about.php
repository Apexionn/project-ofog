<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $USE_TAILWIND = true;
        $TITLE = 'About Us';
        require('components/head.php');
    ?>
    <style>
    </style>
</head>

<body>
    <?php $NAVBAR_SET_IMMERSIVE = true; require_once('components/navbar.php'); ?>
    <div class="wrapper-dark pt-16 md:pt-0">
        <div class="container">
            <h1 class="title white">
                <span>Our Vision & Mission</span>
            </h1>

            <div class="lg:flex block pt-6 lg:pt-12">
                <div class="half border-b lg:border-b-0 lg:border-r border-gray-100 pb-12 w-full lg:w-1/2">
                    <h2 class="h2 pb-10">Vision</h2>
                    <p>"Menjadikan HIMTI BINUS University sebagai Himpunan Mahasiswa yang dikenal se-Asia
                        Tenggara pada tahun 2025"</p>
                </div>
                <div class="half pt-6 pt-12 lg:pt-0 w-full lg:w-1/2">
                    <h2 class="h2 pb-10">Mission</h2>
                    <p>
                        Memperkuat ikatan antar sesama anggota keluarga HIMTI dengan pengetahuan, pengalaman, dan
                        nilai-nilai baik dalam membentuk satu keluarga HIMTI yang solid.
                        <br /><br />
                        Menanamkan dan mengembangkan sikap profesional dalam setiap individu di dalam HIMTI, agar siap
                        menghadapi dunia industri, karir, dan pengembangan lingkungan global.
                        <br /><br />
                        Menjunjung tinggi rasa nasionalisme, menunjukkan bahwa HIMTI berbakti pada Indonesia.
                    </p>
                </div>
            </div>
        </div>
        <div class="container ">
            <h1 class="title white">
                <span>Mars HIMTI</span>
            </h1>

            <div class="md:flex pt-8 lg:pt-16">
                <div class="half pb-4 w-full sm:w-4/5 h-72 md:h-80 xl:h-96 max-w-screen-sm mx-auto md:w-1/2 lg:pr-0">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/qSEqg0m1cAU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </div>
                <div class="half w-full md:w-1/2">
                    <p class="pb-8">
                        Mari semua melangkah maju
                        <br />
                        Bulatkanlah tekadmu
                        <br />
                        Berkarya bagi nusa dan bangsa
                        <br />
                        Wujudkan cita-cita mulia
                    </p>
                    <p class="pb-8">
                        Derapkanlah langkah kakimu
                        <br />
                        Menyosong masa depanmu
                        <br />
                        Siap berbakti dan mengabdi
                        <br />
                        Bagi Univ Bina Nusantara
                    </p>
                    <p class="pb-8">
                        Maju terus pantang mundur
                        <br />
                        Membangun pendidikan bangsa
                        <br />
                        Galang persatuan dan kesatuan
                        <br />
                        HIMTI Bina Nusantara
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="h-32">
        <div class="transition">
        </div>
    </div>

    <div style="overflow-x:hidden">
        <div class=" container px-0 xl:px-6" style="width: 100%">
            <h1 class=" title">
                <span>Organizational Structure</span>
            </h1>
            <div style="position: relative; display: flex; margin:auto; text-align: center; justify-content:center;">
                <div style="margin: 20px 30px; display:flex; flex-direction: column; gap: 5px;">
                    <a href="assets/img/about/Struktur-NON-DPI-2024.png" style="padding-top:10px;" target="_blank">
                        <img src="assets/img/about/Struktur-DPI-2024.png" Class="Bagan" alt="" style="display: flex; margin: auto;">
                    </a>
                    <a href="assets/img/about/Struktur-NON-DPI-2024.png" target="_blank">
                        <img src="assets/img/about/Struktur-NON-DPI-2024.png"  Class="Bagan" alt="" style="display: flex; margin: auto;">
                    </a>
                </div>
            </div>
        </div>

        <div class=" container h-64 md:h-96">
            <h1 class="title" style="padding-top: 0%;">
                <span>Our Logo</span>
            </h1>
        </div>
    </div>

    <div class="wrapper-dark">
        <div class="container px-2 md:px-8">
            <div class="logo-info">
                <img id="logo-info-img" src="assets/img/about/logo-infographic.svg" alt="">
            </div>
        </div>

        <div class="container">
            <h1 class="title white">
                <span>Commissions</span>
            </h1>

            <div class="py-8 border-b border-gray-100">
                <div class="cd-wrapper flex flex-col md:flex-row justify-center items-center">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 1: Education</h2>
                    <div class="cd-img-container">
                        <img class="cd-img mb-12" src="assets/img/about/responsi-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Responsi Division</h3>
                            <p class="text-justify">Divisi ini memberikan pengayaan lebih dalam mengenai materi
                                perkuliahan berupa kelas belajar yang membantu para mahasiswa/i Teknik
                                Informatika.</p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="com-logo cd-img" src="assets/img/about/komsat-logo.svg" alt="">
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/progclass-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Programming Class Division</h3>
                            <p class="text-justify">Divisi ini mengadakan kelas <i>programming</i> dengan materi
                                yang
                                tidak didapatkan selama perkuliahan pada umumnya sebagai bekal untuk
                                meningkatkan
                                kemampuan di bidang <i>IT</i>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-8 border-b border-gray-100">
                <div class="cd-wrapper flex flex-col md:flex-row justify-center">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 2: Relation
                        Expansion</h2>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/pm-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Publication and Marketing Division</h3>
                            <p class="text-justify">Divisi ini bertanggung jawab dalam pengembangan relasi dan
                                komunikasi HIMTI terhadap berbagai pihak yang lainnya, serta bertugas sebagai
                                pihak
                                promotor dan distributor berbagai produk buatan HIMTI.</p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="com-logo cd-img" src="assets/img/about/komdu-logo.svg" alt="">
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/hc-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">HIMTI Care Division</h3>
                            <p class="text-justify">Divisi ini mengurus hal-hal yang berkaitan dengan <i>study
                                    tour</i>
                                internal, <i>fellowship</i> antar aktivis, dan juga bakti sosial.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-8 border-b border-gray-100">
                <div class="cd-wrapper flex flex-col md:flex-row justify-center">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 3: Research and
                        Development
                    </h2>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/cnd-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Creative and Design Division</h3>
                            <p class="text-justify">Divisi ini merupakan divisi yang berkontribusi dalam
                                pembuatan
                                setiap <i>design</i> logo, poster, dan <i>banner</i> yang ada di HIMTI BINUS
                                University.
                            </p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="com-logo cd-img" src="assets/img/about/komtig-logo.svg" alt=""  >
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/webdev-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Web Development Division</h3>
                            <p class="text-justify">Divisi ini bertanggung jawab dalam pengembangan dan
                                pengelolaan
                                <i>official website</i> HIMTI dan setiap <i>website event</i> yang ada di HIMTI
                                BINUS
                                University.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-8">
                <div class="cd-wrapper flex flex-col md:flex-row justify-center items-center">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 4: Human Resource Development</h2>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/supervisor-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Supervisor</h3>
                            <p class="text-justify">Divisi ini membina dan mengawasi kegiatan pada region-region yang belum memiliki struktur kepengurusan sendiri, 
                                sambil perlahan-lahan mendorong kinerja dan kepengurusan untuk periode berikutnya.</p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="w-75 com-logo cd-img" src="assets/img/about/kompat-logo.svg" alt="">
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/hrd-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Human Resource Department</h3>
                            <p class="text-justify">Divisi ini bertugas untuk melakukan quality control dalam sumber daya manusia dalam ruang lingkup HIMTI. 
                                Mengawasi, mengevaluasi, dan menyeleksi adalah jobdesc umum bagi HRD.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-32">
        <div class="transition">
        </div>
    </div>

    <div class="wrapper-light">
        <div class="container pb-12">
            <h1 class="title" style="padding-top: 0">
                <span>History</span>
            </h1>
            <div class="text-justify py-10 px">
                <div class="block md:flex">
                    <img class="half max-w-screen-sm w-full sm:w-4/5 pb-6 md:pb-0 md:w-1/2 mx-auto pl-0 xl:px-12 w-2/5 animate-pulse"
                        src="assets/img/about/history-img.svg" alt="">
                    <div class="half w-full px-0 sm:px-4 md:pl-0 lg:pr-12 xl:pl-4 w-3/5">
                        <p>
                            <b>Himpunan Mahasiswa Teknik Informatika Universitas Bina Nusantara</b> atau yang
                            sering
                            kita sebut <b>HIMTI</b> berdiri pertama kali pada tahun 1992, tepatnya pada 14
                            September
                            1992. Pencetus ide HIMTI merupakan mantan ketua Jurusan Teknik Informatika yaitu
                            Bpk. Ir.
                            Toto Widyanto, MSc. Pada saat itu, HIMTI dipimpin oleh koordinator umum bernama Sdr.
                            Yusuf
                            Setiyono HIMTI sendiri merupakan organisasi kemahasiswaan yang memiliki bentuk
                            sebagai
                            himpunan antar jurusan School of Computer Science (SOCS).
                        </p>
                        <br />
                        <p class="hidden xl:block">
                            Bpk. Ir. Toto Widyanto, MSc. berharap dengan didirikannya HIMTI, organisasi ini
                            dapat
                            memberikan bantuan secara nyata demi mengembangkan IT di Indonesia serta mampu
                            menjadi
                            sarana pelatihan kemampuan kepemimpinan dan manajemen dalam suatu organisasi.
                        </p>
                    </div>
                </div>
                <div class="xl:pt-8 px-0 sm:px-4 lg:px-12">
                    <p class="xl:hidden">
                        Bpk. Ir. Toto Widyanto, MSc. berharap dengan didirikannya HIMTI, organisasi ini dapat
                        memberikan
                        bantuan secara nyata demi mengembangkan IT di Indonesia serta mampu menjadi sarana
                        pelatihan
                        kemampuan kepemimpinan dan manajemen dalam suatu organisasi.
                        <br /><br />
                    </p>
                    <p>
                        Suatu organisasi pasti memiliki visi dan misi, begitu juga dengan HIMTI BINUS. HIMTI
                        BINUS
                        memiliki visi yaitu menjadi Himpunan Mahasiswa yang dikenal se-Asia Tenggara pada tahun
                        2025,
                        dan misi berupa memperkuat ikatan antar sesama anggota HIMTI, menanamkan dan
                        mengembangkan sikap
                        professional dalam tiap-tiap individu, menjunjung tinggi rasa nasionalisme dan bakti
                        terhadap
                        Indonesia.
                        <br /><br />
                        Sesuai dengan lambang HIMTI yang berupa kubus 3 dimensi dengan tulisan TI didalamnya
                        sehingga
                        HIMTI diharapkan mampu menjadi wadah untuk memberikan kontribusi nyata bagi mahasiswa/i.
                    </p>
                </div>
            </div>
        </div>
    </div>

    
    <?php require_once('components/footer.php') ?>

    <!-- <script src="script.js"></script> -->
</body>

</html>