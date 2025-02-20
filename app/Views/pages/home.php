

<?= $this->extend('layouts/layout.php') ?>

<?= $this->section('home') ?>
    <div class="container">
    <br><br><br>
    <div class="dashboard" style="border: 2px solid re; display: flex; justify-content: center; padding: 10px 20px;">

    <div class="card scanned">
        <a href="">
        <p>Scanned</p>
        <p>3000</p>
        </a>
    </div>


    <div class="card qc">
    <a href="">
        <p>QC</p>
        <p>2000</p>
    </a>
    </div>


    <div class="card indexed">
    <a href="">
        <p>Indexed</p>
        <p>1000</p>
    </a>
    </div>

    <div class="card complete">
    <a href="">
        <p>Complete</p>
        <p>800</p>
    </a>
    </div>
    </div>

<?= $this->endSection() ?>