
<?= $this->extend('layouts/layout.php') ?>

<?= $this->section('signup') ?>

<?= session()->getFlashdata('error') ?>

<div class="login-container" style="background-image: url('<?=base_url('assets/img/signupbg.jpg')?>');">
    <div class="signupform" style="border: 3px solid grey; margin: auto; border-radius: 5px; width: fit-content; height: fit-content; margin-top: 4%; padding: 20px 40px; background-color: #bbbbbb; ">
    <h3 style=" text-align: center; ">SIGN UP</h3>

        <?= form_open('forms/signup') ?>
        <?= csrf_field() ?>
        <?= validation_list_errors() ?>
            <label class="text-dark" for="">Username</label><br>
            <input type="text" name="username" value="<?= set_value('username') ?>"><br>

            <label class="text-dark" for="">Email</label><br>
            <input type="email" name="email" value="<?= set_value('email') ?>"><br>

            <label class="text-dark" for="">Password</label><br>
            <input type="password" name="password" value="<?= set_value('password') ?>"><br>

            <label class="text-dark" for="">Passowrd Confirm</label><br>
            <input type="password" name="passconf" value="<?= set_value('passconf') ?>"><br>

            <input class="fw-bolder" style="background-color: orangered; border: none; color: white; border-radius: 5px; font-size: 15px;" type="submit" value="Sign Up">

            <br><br>
            Already have account? <a style="color: orangered; text-decoration: none; font-weight: bolder;" href="/forms/login">Login</a>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>





