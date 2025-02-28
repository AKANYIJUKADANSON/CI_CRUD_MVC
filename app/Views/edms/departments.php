<?= $this->extend('edms/layouts/layout') ?>

<?= $this->section('content') ?>

<div class="containe mt-4 px-4" style="border: 2px solid re">

  <div class="row">
    <div class="col-lg-12 col-md-8 col-sm-6">

      <!-- Notification alert -->
      <?php if(session()->getFlashdata('status')){ ?>
        <div class="alert alert-<?= session()->getFlashdata('color')?> alert-dismissible fade show d-flex align-items-center" role="alert">
          <i class="bi bi-exclamation-triangle-fill me-4"></i>
          <div>
            <!-- Text coming from the flashed data -->
            <strong> <?= session()->getFlashdata('status')?>. </strong>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

      <?php } unset($_SESSION['status'], $_SESSION['color'], $_SESSION['icon']); ?>



      <div class="card">
        <div class="card-header ">
          <span class="text-white px-2 py-1 rounded bg-primary fw-bolder fs-6 border-none float-start">AVAILABLE DEPARTMENTS</span>

          <button class="btn btn-sm btn-light btn-outline-dark b-none float-end d-flex fs-6 fw-bolder" type="button" data-bs-toggle="modal" data-bs-target="#addDepartment">
            <i class="bi bi-plus-circle-fill text-success me-2"></i>
            <span class="my-auto text-success">NEW</span>
          </button>

        </div>
      
        <table class="w-100 table table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Department</th>
              <th></th>
              <th class="text-center">Action</th>
            </tr>
          </thead>

          <tbody>
            
              <!-- Loop through the departments -->
              <?php 
                  if(esc($departments != [])) {
                    foreach ($departments as $department) { ?>
                        <tr>
                          
                          <td> 
                            <?= esc($department['id']) ?> 
                          </td>
                          <td> 
                            <?= esc($department['code'])." - " ?> <?= esc($department['department_name']) ?> 
                          </td>

                          <td class="text-end"> 
                          <?php if(esc($department['activation_status'])== 0){?>
                            <a class="btn btn-success text-decoration-none fw-bolder" style="padding: 1px 3px; background-color: green; color: white; font-size: 12px" href="/edms/activate/<?= esc($department["id"], "url") ?>">Activate</a>

                            <?php }else{?>
                            <a class="btn btn-success text-decoration-none fw-bolder" style="padding: 1px 3px; background-color: red; color: white; font-size: 12px" href="/edms/deactivate/<?= esc($department["id"], "url") ?>">Deactivate</a>
                            <?php }?>

                          </td>

                          <td class="text-center">
                            <i class="bi bi-eye-fill text-secondary fs-4 me-2" data-bs-toggle="modal" data-bs-target="#viewDepartment"></i>
                          
                            <a class="text-decoration-none" href="/edms/update_deptmt/<?= esc($department['id']) ?>">
                              <i class="bi bi-pencil-square text-secondary fs-5 me-2"></i>
                            </a>
                            <a class="text-decoration-none" href="/edms/delete_dept/<?= esc($department['id']) ?>">
                              <i class="bi bi-trash-fill text-danger fs-5 me-2"></i>
                            </a>
                          </td>

                  <?php }}else{ ?>
                    <p>No department yet</p>
                  <?php } ?>
            </tr>
          </tbody>
        </table>

      </div>
      
    </div>
  </div>
</div>


  <!-- Add department Modal -->
  <div class="modal fade" id="addDepartment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">NEW DEPARTMENT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/edms/departments" method="post">
          <?= csrf_field() ?>
          <label for="exampleDataList" class="form-label">Name</label>
          <input class="form-control" name="department_name"  placeholder="Type...">

          <label for="exampleDataList" class="form-label">Code</label>
          <input class="form-control" name="department_code" placeholder="e.g. ACC001">             


        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-sm btn-success">ADD</button> -->
          <input type="submit" value="ADD" class="btn btn-sm btn-success">
        </form>
          <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">CANCEL</button>
        </div>
      </div>
    </div>
  </div>

  <!-- View Department Model -->
  <div class="modal fade" id="viewDepartment" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-primary" id="staticBackdropLabel">DEPARTMENT DETAILS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
          <label class="form-label fw-bolder">Department Name</label><br>
          <span> <?= esc($department['department_name']) ?></span> <br><br>

          <label class="form-label fw-bolder">Code</label><br>
          <span> <?= esc($department['code']) ?></span>             


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection() ?>