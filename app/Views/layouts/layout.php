<!doctype html>
<html>
<head>
    <title>edocs++ | <?php //esc($title) ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.min.css') ?>">

</head>
<body>

    <div class="app">
        <?= $this->renderSection('home') ?>
        <?= $this->renderSection('about') ?>
        <?= $this->renderSection('products') ?>
        <?= $this->renderSection('services') ?>
        <?= $this->renderSection('contacts') ?>
        <?= $this->renderSection('news') ?>
        <?= $this->renderSection('dashboard') ?>
        <?= $this->renderSection('signup') ?>
        <?= $this->renderSection('login') ?>
    </div>

    <!-- <p style="margin-top: 15%; text-align: center"><em>&copy; <?php //echo date('Y') ?> ObuntuTechnologies</em></p> -->

<!-- Bootstrap js -->
 <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
 <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
 <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
</body>
</html>