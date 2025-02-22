
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> -->
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <!-- Logo here -->
      <img class="my-auto mb-1" style="width: 75%; height: 35%;" src="<?=base_url('assets/img/logo.png')?>" alt="">
    </div>

    <!-- Links -->
     <hr>
     <div>
        <!-- Dashboard -->
        <div class="">
            <a class="text-decoration-none" href="/edms/dashboard">
                <i class="bi bi-grid-fill text-secondary fs-6 fw-bolder me-3"></i>
                <span class="fw-bolder text-secondary fs-6">Dashboard</span>
            </a>
        </div>


        <!-- Departments -->
        <div class="dropdown mt-4">
            <a class="text-decoration-none text-secondary" href="/edms/departments">
                <i class="bi bi-folder-fill text-secondary fs-6 fw-bolder me-3"></i>
                <span class="fw-bolder text-secondary fs-6">Departments</span>
            </a>



            <!-- <a class="text-decoration-none dropdown-toggle text-secondary" href="/edms/departments" data-bs-toggle="dropdown">
                <i class="bi bi-folder-fill text-secondary fs-6 fw-bolder me-3"></i>
                <span class="fw-bolder text-secondary fs-6">Departments</span>
            </a>

            <ul class="dropdown-menu ms-4">
                <li>
                    <a class="dropdown-item" href="/edms/departments">
                    <i class="bi bi-folder-plus text-warning fs-6 fw-bolder me-3"></i>
                    All Departments
                    </a>
                </li>
            </ul> -->
        </div> 


        <!-- Users -->
        <div class="mt-4">
            <a class="text-decoration-none mt-4" href="">
                <i class="bi bi-people-fill text-secondary fs-6 fw-bolder me-3"></i>
                <span class="fw-bolder text-secondary fs-6">Users</span>
            </a>
        </div>

     </div>
    <!-- <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div> -->
  </div>
</div>