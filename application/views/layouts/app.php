<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>CIShop <?= isset($title) ? $title : 'CIShop'  ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/css/all.min.css') ?>">
    <!-- Costum Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <!-- Content Main-->
    <div class="mt-5">
        <?php $this->load->view($page); ?>
    </div>
    <!-- End Content Main -->
    <script src="<?= base_url('assets/libs/jquery/jquery.com_jquery-3.7.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/app_product.js'); ?>"></script>
    <script src="<?= base_url('assets/js/app_category.js'); ?>"></script>
</body>

</html>