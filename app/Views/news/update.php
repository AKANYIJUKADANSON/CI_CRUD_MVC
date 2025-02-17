
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news/dataUpdate/<?=esc($itemToUpdate['id']); ?>" method="post">
    <?= csrf_field() ?>

    <label style="font-size: 20px">Record ID: <span style="color: orangered; font-weight: bolder;"><?= esc($itemToUpdate['id']) ?></span></label><br><br>
    <label for="title">Title</label>
    <input type="input" name="title" value="<?= esc($itemToUpdate['title']) ?>">
    <br><br>

    <label for="body">Body</label>
    <textarea name="body" cols="45" rows="4"><?= esc($itemToUpdate['body']) ?></textarea>
    <br><br>

    <label for="body">Created On</label>
    <input type="date" name="created_on" value="<?= esc($itemToUpdate['created_on']) ?>">
    <br><br>

    <input style="background-color: yellow; padding: 7px 10px; border-radius: 5px;" type="submit" name="submit" value="Update">

    
</form>