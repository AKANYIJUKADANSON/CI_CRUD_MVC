
<?= session()->getFlashdata('error') ?>

<h3 style="color: grey; text-align: center; ">LOGIN</h3>
<div class="signupform" style="border: 10px solid grey; margin: auto; border-radius: 5px; width: fit-content; padding: 20px 40px; background-color: #bbbbbb;">
    <?= form_open('forms/login') ?>
    <?= validation_list_errors() ?>
        <label for="">Username</label><br>
        <input type="text" name="username" value="<?= esc($user_name) ?>"><br>

        <label for="">Password</label><br>
        <input type="password" name="password" value="<?= set_value('password') ?>"><br>

        <input style="background-color: orangered; border: none; color: white; border-radius: 5px; font-size: 15px;" type="submit" value="Login">

        <br><br>
        Have no account? <a style="color: orangered; text-decoration: none; font-weight: bolder;" href="/forms/signup">Sign Up</a>
    <?= form_close() ?>
</div>