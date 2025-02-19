
<?= session()->getFlashdata('error') ?>

<h3 style="color: grey; text-align: center; ">SIGN UP</h3>
<div class="signupform" style="border: 10px solid grey; margin: auto; border-radius: 5px; width: fit-content; padding: 20px 40px; background-color: #bbbbbb;">
    <?= form_open('forms/signup') ?>
    <?= validation_list_errors() ?>
        <label for="">Username</label><br>
        <input type="text" name="username" value="<?= set_value('username') ?>"><br>

        <label for="">Email</label><br>
        <input type="email" name="email" value="<?= set_value('email') ?>"><br>

        <label for="">Password</label><br>
        <input type="password" name="password" value="<?= set_value('password') ?>"><br>

        <label for="">Passowrd Confirm</label><br>
        <input type="password" name="passconf" value="<?= set_value('passconf') ?>"><br>

        <input style="background-color: orangered; border: none; color: white; border-radius: 5px; font-size: 15px;" type="submit" value="Sign Up">

        <br><br>
        Already have account? <a style="color: orangered; text-decoration: none; font-weight: bolder;" href="/forms/login">Login</a>
    <?= form_close() ?>
</div>