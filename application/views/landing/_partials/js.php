<!-- jQuery -->
<script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/landing/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="<?= base_url() ?>assets/landing/js/popper.js"></script>
<script src="<?= base_url() ?>assets/landing/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="<?= base_url() ?>assets/landing/js/scrollreveal.min.js"></script>
<script src="<?= base_url() ?>assets/landing/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/landing/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>assets/landing/js/imgfix.min.js"></script>

<script src="<?= base_url() ?>assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="<?= base_url() ?>assets/js/pages/form-element-select.js"></script>

<!-- Global Init -->
<script src="<?= base_url() ?>assets/landing/js/custom.js"></script>
<!-- Dropify -->
<script src="<?= base_url() ?>assets/landing/js/dropify.js"></script>
<!-- sweetalert2 -->
<script src="<?= base_url() ?>assets/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/sweetalert2.js"></script>
<!-- flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
$('.dropify').dropify({
    messages: {
        'default': 'Seret dan lepas lampiran di sini atau klik',
        'replace': 'Seret dan lepas atau klik untuk mengganti',
        'remove': 'Hapus',
        'error': 'Ups, sesuatu yang salah terjadi.'
    }
});
</script>

<?php if ($this->uri->segment(1) == 'lapor') { $this->load->view('landing/_partials/lapor_js'); } ?>

</body>

</html>