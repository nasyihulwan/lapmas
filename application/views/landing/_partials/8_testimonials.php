<!-- ***** Testimonials Start ***** -->
<section class="section" id="testimonials">
    <div class=" container">

        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Ulasan Masyarakat</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>
                        Ulasan dan penilaian dari Orang-orang yang telah menggunakan LAPMAS
                    </p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper content">

                <?php foreach ($ulasan as $u) { ?>
                <div class="swiper-slide">
                    <!-- ***** Testimonials Item Start ***** -->
                    <div class="col-12">
                        <div class="team-item">
                            <div class="team-content">
                                <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                                <p><?= $u->ulasan ?></p>
                                <div class="user-image">
                                    <img src="https://placehold.it/60x60" alt="">
                                </div>
                                <div class="team-info">
                                    <h3 class="user-name">
                                        <?php if ($u->mn != null) { 
                                            if ($u->is_censored == '1') {
                                                    echo mb_substr($u->mn, 0, 1) . "****" . mb_substr($u->mn, -1);
                                                } else if ($u->mn == '-' || $u->mn == null) { 
                                                    echo $u->nik; 
                                                } else {
                                                    echo $u->mn; 
                                                }
                                            } else { 
                                                echo $u->nik; 
                                                }  ?></h3>
                                    <span><?= $u->tingkat_kepuasan ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Testimonials Item End ***** -->
                </div>
                <?php } ?>

            </div>

        </div>
        <div class="col-sm-12 swiper-pagination mb-3"></div>

        <div class="col-12">
            <input type="hidden"
                value="<?= $this->db->get_where('ulasan_masyarakat', ['tingkat_kepuasan' => 'Sangat Puas'])->num_rows() ?>"
                id="sangatPuas" class="sangatPuas">
            <input type="hidden"
                value="<?= $this->db->get_where('ulasan_masyarakat', ['tingkat_kepuasan' => 'Puas'])->num_rows() ?>"
                id="puas" class="puas">
            <input type="hidden"
                value="<?= $this->db->get_where('ulasan_masyarakat', ['tingkat_kepuasan' => 'Kurang Puas'])->num_rows() ?>"
                id="kurangPuas" class="kurangPuas">
            <input type="hidden"
                value="<?= $this->db->get_where('ulasan_masyarakat', ['tingkat_kepuasan' => 'Tidak Puas'])->num_rows() ?>"
                id="tidakPuas" class="tidakPuas">
            <input type="hidden"
                value="<?= $this->db->get_where('ulasan_masyarakat', ['tingkat_kepuasan' => 'Sangat Tidak Puas'])->num_rows() ?>"
                id="sangatTidakPuas" class="sangatTidakPuas">
            <div id="chart-ulasan"></div>
        </div>
    </div>
</section>
<!-- ***** Testimonials End ***** -->

<?php $this->load->view('__partials/_js.php'); ?>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// var sangatPuas = document.getElementById('sangatPuas').value;
// var puas = document.getElementById('puas').value;
// var tidakPuas = document.getElementById('tidakPuas').value;
// var kurangPuas = document.getElementById('kurangPuas').value;
// var sangatTidakPuas = document.getElementById('sangatTidakPuas').value;

// var optionsUlasan = {
//     annotations: {
//         position: "back",
//     },
//     dataLabels: {
//         enabled: false,
//     },
//     chart: {
//         type: "bar",
//         height: 300,
//     },
//     fill: {
//         opacity: 1,
//     },
//     plotOptions: {},
//     series: [{
//         name: "sales",
//         data: [sangatPuas, puas, tidakPuas, kurangPuas, sangatTidakPuas]
//     }, ],
//     colors: "#9694FF",
//     xaxis: {
//         categories: [
//             "Sangat Puas",
//             "Puas",
//             "Kurang Puas",
//             "Tidak Puas",
//             "Sangat Tidak Puas",
//         ],
//     },
// };

// var chartUlasan = new ApexCharts(
//     document.querySelector("#chart-ulasan"),
//     optionsUlasan
// );

// chartUlasan.render();
</script>