<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\UsersModel;

    class UsersController extends BaseController{

        // Get all the users
        public function users(){
            $model = model(UsersModel::class);

            $data = [
                'userList' => $model->getUsers(),
                'title' => 'auth'
            ];

            return view('/edms/users', $data);
        }

        public function createUser(){
            // TODO ---- Check if the user already exits using username and email
            
            echo "Ready to accept a user";

            // TODO ---- Validate user data and save their data in the database
        }
    }