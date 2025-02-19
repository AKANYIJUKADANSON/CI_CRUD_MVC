<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class AuthModel extends Model
    {
        protected $table = "auth";

        protected $allowedFields = ['username', 'email', 'password'];

        // Get the list of users
        public function getUsers($slug=false){
            if($slug === false){
                $this->findAll();
            }

            // If the $Slug is given then get the user details
            return $this->where(['username'=> $slug])->first();
        }

    }