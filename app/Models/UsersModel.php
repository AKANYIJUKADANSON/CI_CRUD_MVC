<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UsersModel extends Model{
        // define the table
        protected $table = 'auth';
        protected $primaryKey = 'id';

        protected $allowedFields = ['id', 'username', 'email', 'password'];

        public function getUsers($user_id=false){

            if($user_id===false){
                // Find all the users
                return $this->findAll();
            }

            // Else return the a specific user
            return $this->where(['id'=>$user_id])->first() ;
        }
    }