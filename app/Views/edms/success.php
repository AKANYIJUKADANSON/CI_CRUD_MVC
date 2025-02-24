<?= $this->extend('edms/layouts/layout.php') ?>
<?= $this->section('success') ?>

<div class="" style="justify-content: center; display: flex;">
    <a class="" href="/edms/departments" style=" justify-content: center; display: block; border: 2px solid #e4f4f4; text-decoration: none; padding: 50px 100px; margin: auto; background-color: green; margin-top: 5%">
        
            <p class="text-white"><?= esc($message);?></p>

            <p class="text-center">
                <i class="bi bi-check-circle-fill fs-1 text-white p-4"></i>
            </p>
    </a>
</div>

<?= $this->endSection() ?>