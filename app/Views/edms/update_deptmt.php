<?= $this->extend('edms/layouts/layout') ?>
<?= $this->section('content') ?>

    <div class="container">
        <div class="row d-flex justify-content-center mt-2">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header" style="border: 2px solid re">UPDATE DEPARTMENT
                        <a type="button" class="btn btn-sm btn-danger float-end" href="/edms/departments">BACK</a>
                    </div>
                    <div class="card-body">
                        <form class="p-3" action="/edms/update_deptmt/<?= esc($department['id']) ?>" method="post">

                        <!-- This hidden input converts the form into a PUT request and is a true PUT request as far as the routing and the IncomingRequest class are concerned -->
                         <!-- Allows HTTP Method Spoofing -->
                            <input type="hidden" name="_method" value="PUT">

                            <?= csrf_field() ?>
                            <label for="exampleDataList" class="form-label fw-bold">Department Name</label>
                            <input type="text" class="form-control" name="department_name" value="<?= esc($department['department_name']) ?> ">

                            <label for="exampleDataList" class="form-label fw-bold">Code</label>
                            <input type="text" class="form-control" name="department_code" value="<?= esc($department['code']) ?> ">



                            <div class="d-flex justify-content-end mt-3">
                                <input type="submit" value="UPDATE" class="btn btn-sm btn-warning">
                             </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        


<?= $this->endSection()?>