
<?= $this->extend('edms/layouts/layout') ?>
<?= $this->section('users') ?>

<div class="containe mt-4 mx-2" style="border: 2px solid re">

  <div class="card">
    <div class="card-header ">
      <span class="text-white px-2 py-1 rounded bg-danger fw-bolder fs-6 border-none float-start">USERS</span>

      <button class="btn btn-sm btn-light btn-outline-dark b-none float-end d-flex fs-6 fw-bolder" type="button" data-bs-toggle="modal" data-bs-target="#addUser">
        <i class="bi bi-plus-circle-fill text-success me-2"></i>
        <span class="my-auto text-success">NEW</span>
      </button>

    </div>
  
    <table class="w-100 table table-responsive">
      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>

      <tbody>
        
          <!-- Loop through the departments -->
           <?php 
              if(esc($userList != [])) {
                foreach ($userList as $user) { ?>
                    <tr>

                      <td> 
                        <?= esc($user['username']) ?> 
                      </td>

                      <td> 
                        <?= esc($user['email']) ?> 
                      </td>

                      <td> 
                        <?= esc($user['role']) ?> 
                      </td>

                      <td class="text-center"><i class="bi bi-pencil-square text-secondary"></i></td>

              <?php }}else{ ?>
                <p>Empty list</p>
              <?php } ?>
        </tr>
      </tbody>
    </table>

  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">NEW USER</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/edms/create_user" method="post">
        <?= csrf_field() ?>
        <label for="exampleDataList" class="form-label fw-bold">Username</label>
        <input type="text" class="form-control" name="username" >

        <label for="exampleDataList" class="form-label fw-bold">Email</label>
        <input type="email" class="form-control" name="user_email" placeholder="example@eg.com">
        
        <label for="exampleDataList" class="form-label fw-bold">Role</label>
        <select name="role" class="form-control">
            <option value="Administrator">Administrator</option>
            <option value="Secretary">Secretary</option>
            <option value="Data_entrant">Data Entrant</option>
            <option value="Manager">Manager</option>
        </select>

        <label for="exampleDataList" class="form-label fw-bold">Password</label>
        <input type="password" class="form-control" name="user_password">

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-sm btn-success">ADD</button> -->
        <input type="submit" value="CREATE" class="btn btn-sm btn-success">
      </form>
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">CANCEL</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>