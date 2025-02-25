
<?= $this->extend('layouts/layout.php') ?>

<?= $this->section('news') ?>
    <div class="container">
      <br><br>

    <div class="card">
      <div class="card-header ">

          <a type="button" class="btn text-info btn-light btn-outline-dark b-none float-end d-flex fs-6 fw-bolder"
          style="text-decoration:none; " href="/news/new">
            <i class="bi bi-plus-circle-fill text-info me-2"></i>
            Add Post
          </a>


      </div>
        <table class="w-100 table table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created_On</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if(esc($news_list != [])) {
                foreach($news_list as $news) {
                  ?>
                    <tr>
                      <td><?= esc($news['id']); ?></td>
                      <td><?= esc($news['title']); ?></td>
                      <td><?= esc($news['body']); ?></td>
                      <td><?= esc($news['created_on']); ?></td>
                      <td>
                        <div class="d-flex justify-content-center">
                          <a class="btn btn-success fw-bolder text-decoration-none text-white me-2" style="font-size: 10px; padding: 1px 2px; border-radius: 4px;"  href="/news/<?= esc($news['id'], 'url') ?>">View</a>

                          <a class="btn btn-warning fw-bolder text-decoration-none text-white me-2" style="font-size: 10px; padding: 1px 2px; border-radius: 4px;"  href="/news/update/<?= esc($news['id'], 'url') ?>">Update</a>

                          <a class="btn btn-danger fw-bolder text-decoration-none text-white me-2" style=" font-size: 10px; padding: 1px 2px; border-radius: 4px;"  href="/news/delete/<?= esc($news['id'], 'url') ?>">Delete</a>
                        </div>

                      </td>
                    </tr>
                  <?php
                }
              } else {
                echo '<h3>No news items found</h3>';
              }
            ?>
          </tbody>

        </table>
      </div>

    </div>

    <?= $this->endSection() ?>





    
