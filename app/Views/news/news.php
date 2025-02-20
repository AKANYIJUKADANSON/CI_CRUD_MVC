
<?= $this->extend('layouts/layout.php') ?>

<?= $this->section('news') ?>
    <div class="container">
      <br><br>

    <button style="margin-bottom: 10px; padding: 5px 3px; background-color: deepskyblue; border-radius: 4px; border: none;">
      <a style="padding: 5px;  color: white; font-size: 15px; text-decoration:none;  font-weight: bolder" href="/news/new">+ Add Post</a>
    </button>

    <table border="1" class="table table stripped">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created On</th>
            </tr>
    <?php
      if(esc($news_list != [])) {
        foreach($news_list as $news) {
          ?>
            <tr>
              <td><?= esc($news['id']); ?></td>
              <td><?= esc($news['title']); ?></td>
              <td><?= esc($news['body']); ?></td>
              <td><?= esc($news['created_on']); ?></td>
              <td style="padding: 8px 5px; display: flex;">
                <a class="bg-success text-white p-1 text-decoration-none me-2 fs-6 rounded fw-bolder"  href="/news/<?= esc($news['id'], 'url') ?>">View</a>

                <a style="padding: 5px; background-color: gray; color: white; text-decoration:none; border-radius: 4px; font-weight: bolder; margin-right: 10px"  href="/news/update/<?= esc($news['id'], 'url') ?>">Update</a>

                <a style="padding: 5px; background-color: red; color: white; text-decoration:none; border-radius: 4px; font-weight: bolder"  href="/news/delete/<?= esc($news['id'], 'url') ?>">Delete</a>

              </td>
            </tr>
          <?php
        }
      } else {
        echo '<h3>No news items found</h3>';
      }
    ?>

    </table>

    <?= $this->endSection() ?>
