<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>
        <?php
        if ($this->uri->segment(3) !== null) {
            echo SITE_NAME . " : " . ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2));
        } else if ($this->uri->segment(2) !== null) {
            echo SITE_NAME . " : " . ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2));
        } else if ($this->uri->segment(1) !== null) {
            echo SITE_NAME . " : " . ucfirst($this->uri->segment(1));
        } else {
            echo SITE_NAME;
        }
        ?>
    </title>

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/lapmas_logo.png" type="image/png">
    <!-- ===== Link Swiper's CSS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@9.1.0/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/carousel.css" />


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/landing/css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/templatemo-softy-pinko.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/dropify.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/sweetalert2/sweetalert2.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/choices.js/public/assets/styles/choices.css" />


</head>

<body>