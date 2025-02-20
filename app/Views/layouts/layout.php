<!doctype html>
<html>
<head>
    <title>edocs++ | <?php //esc($title) ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

    <div class="app">
        <?= $this->renderSection('home') ?>
        <?= $this->renderSection('about') ?>
        <?= $this->renderSection('products') ?>
        <?= $this->renderSection('services') ?>
        <?= $this->renderSection('contacts') ?>
        <?= $this->renderSection('news') ?>
    </div>

<p style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);"><em>&copy; 2022 ObuntuTechnologies</em></p>

<!-- Bootstrap js -->
 <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
 <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
 <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
</body>
</html>