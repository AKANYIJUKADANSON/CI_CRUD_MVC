<?= $this->extend('edms/layouts/layout') ?>
<?= $this->section('content') ?>

    <div class="container">
        <div class="row d-flex justify-content-center mt-2">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header" style="border: 2px solid re">UPDATE USER
                        <a type="button" class="btn btn-sm btn-danger float-end" href="/edms/auth">BACK</a>
                    </div>
                    <div class="card-body">
                        <form class="p-3" action="/edms/update/<?= esc($user['id']) ?>" method="post">

                        <!-- This hidden input converts the form into a PUT request and is a true PUT request as far as the routing and the IncomingRequest class are concerned -->
                         <!-- Allows HTTP Method Spoofing -->
                            <input type="hidden" name="_method" value="PUT">

                            <?= csrf_field() ?>
                            <label for="exampleDataList" class="form-label fw-bold">First name</label>
                            <input type="text" class="form-control" name="first_name" value="<?= esc($user['first_name']) ?> ">

                            <label for="exampleDataList" class="form-label fw-bold">Last name</label>
                            <input type="text" class="form-control" name="last_name" value="<?= esc($user['last_name']) ?> ">

                            <label for="exampleDataList" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" name="user_email" value="<?= esc($user['email']) ?> ">
                            
                            <label for="exampleDataList" class="form-label fw-bold">Role</label>
                            <select name="role" class="form-control">
                                <option class="text-primary" value="<?= esc($user['role']) ?> "><?= esc($user['role']) ?> </option>
                                <option value="Administrator">Administrator</option>
                                <option value="Secretary">Secretary</option>
                                <option value="Data_entrant">Data Entrant</option>
                                <option value="Manager">Manager</option>
                            </select>


                            <div class="d-flex justify-content-end mt-3">
                                <!-- <button type="button" class="btn btn-sm btn-success">ADD</button> -->
                                <input type="submit" value="UPDATE" class="btn btn-sm btn-warning">
                             </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        


<?= $this->endSection()?>