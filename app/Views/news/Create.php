<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br><br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br><br>

    <label for="body">Created On</label>
    <input type="date" name="created_on" value="<?= set_value('created_on') ?>">
    <br><br>

    <input type="submit" name="submit" value="Create news item">
    
</form>