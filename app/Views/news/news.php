
<h2>Title: <?= esc($title); ?></h2>

<button style="margin-bottom: 10px; padding: 10px 5px; background-color: deepskyblue; border-radius: 4px;">
  <a style="padding: 10px;  color: white; font-size: 20px; text-decoration:none;  font-weight: bolder" href="/news/new">+ Add Post</a>
</button>

<table border="1">
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
            <a style="padding: 5px; background-color: green; color: white; text-decoration:none; border-radius: 4px; font-weight: bolder; margin-right: 10px"  href="/news/<?= esc($news['id'], 'url') ?>">View</a>

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
