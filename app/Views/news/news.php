
<h2>Title: <?= esc($title); ?></h2>

</button>
<table border="1">
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
        </tr>
<?php
  if(esc($news_list != [])) {
    foreach($news_list as $news) {
      ?>
        <tr>
          <td><?= esc($news['id']); ?></td>
          <td><?= esc($news['title']); ?></td>
          <td><?= esc($news['body']); ?></td>
          <td>
            <a style="padding: 5px; background-color: green; color: white; text-decoration:none; border-radius: 4px; font-weight: bolder; margin-right: 10px"  href="/news/<?= esc($news['id'], 'url') ?>">View</a>

          </td>
        </tr>
      <?php
    }
  } else {
    echo '<h3>No news items found</h3>';
  }
?>

</table>
