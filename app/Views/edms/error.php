<?= $this->extend('edms/layouts/layout.php') ?>
<?= $this->section('content') ?>

<div class="" style="justify-content: center; display: flex;">
    <a class="" href="<?= esc($redirect_page);?>" style=" justify-content: center; display: block; border: 2px solid #e4f4f4; text-decoration: none; padding: 50px 100px; margin: auto; background-color: red; margin-top: 5%">

            <h1 class="text-center text-white">404</h1>
        
            <p class="text-white"><?= esc($message);?></p>

            <p class="text-center">
                <i class="bi bi-x-circle-fill fs-1 text-white p-4"></i>
            </p>
    </a>
</div>

<?= $this->endSection() ?>