<script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/datatables.js"></script>

<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/js/app.js"></script>
<script src="<?= base_url() ?>assets/js/pages/horizontal-layout.js"></script>

<script src="<?= base_url() ?>assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="<?= base_url() ?>assets/js/pages/form-element-select.js"></script>

<!-- Need: Apexcharts -->
<script script src="<?= base_url() ?>assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/dashboard.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<!-- Page Specific Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    flatpickr(document.getElementById('laporan_dari'), {});
    flatpickr(document.getElementById('laporan_sampai'), {});
});
</script>

<script>
var sangatPuas = document.getElementById('sangatPuas').value;
var puas = document.getElementById('puas').value;
var tidakPuas = document.getElementById('tidakPuas').value;
var kurangPuas = document.getElementById('kurangPuas').value;
var sangatTidakPuas = document.getElementById('sangatTidakPuas').value;

var optionsUlasan = {
    annotations: {
        position: "back",
    },
    dataLabels: {
        enabled: false,
    },
    chart: {
        type: "bar",
        height: 350,
    },
    fill: {
        opacity: 1,
    },
    plotOptions: {},
    series: [{
        name: "Jumlah Ulasan",
        data: [sangatPuas, puas, tidakPuas, kurangPuas, sangatTidakPuas]
    }, ],
    colors: "#9694FF",
    xaxis: {
        categories: [
            "Sangat Puas",
            "Puas",
            "Kurang Puas",
            "Tidak Puas",
            "Sangat Tidak Puas",
        ],
    },
};

var chartUlasan = new ApexCharts(
    document.querySelector("#chart-ulasan"),
    optionsUlasan
);

chartUlasan.render();
</script>

</body>

</html>