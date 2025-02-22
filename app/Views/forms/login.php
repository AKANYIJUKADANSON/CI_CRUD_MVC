
<?= $this->extend('layouts/layout.php') ?>
<?= $this->section('login') ?>
<?= session()->getFlashdata('error') ?>

<div class="login-container" style="background-image: url('<?=base_url('assets/img/signupbg.jpg')?>');">


    <div class="signupform" style="border: 3px solid grey; margin: auto; border-radius: 5px; width: fit-content; padding: 20px 40px; background-color: #bbbbbb; margin-top: 10%">
    <h4 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: center; font-weight: bolder; ">LOGIN</h4>
        
        <form action="/forms/authenticate" method="post">
        <?= csrf_field() ?>
        <?= validation_list_errors() ?>
            <label class="text-dark" for="">Username</label><br>
            <input type="text" name="username" value="<?= set_value('username') ?>"><br>

            <label class="text-dark" for="">Password</label><br>
            <input type="password" name="password" value="<?= set_value('password') ?>"><br>

            <input class="mt-2" style="background-color: orangered; border: none; color: white; border-radius: 5px; font-size: 15px;" type="submit" value="Login">

            <br><br>
            Have no account? <a style="color: orangered; text-decoration: none; font-weight: bolder;" href="/forms/signup">Sign Up</a>
        </form>
    </div>

</div>

<?= $this->endSection() ?>