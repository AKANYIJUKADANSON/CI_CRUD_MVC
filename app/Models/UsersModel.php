<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UsersModel extends Model{
        // define the table
        protected $table = 'auth';
        // protected $primaryKey = 'id';

        protected $allowedFields = ['id', 'first_name', 'last_name', 'email', 'role', 'password'];

        public function getUsers($user_id=false){

            if($user_id===false){
                // Find all the users
                return $this->findAll();
            }

            // Else return the a specific user
            return $this->where(['id'=>$user_id])->first() ;
        }

        // check if user exists to prevent double data entry
        public function checkEmailExistance($user_email){
            return $this->where(['email'=>$user_email])->first();
        }
        // Update user details
        public function updateUser($slug, $updated_data){
            return $this->update(['id'=>$slug], $updated_data);
        }

        public function deleteUser($id){
            return $this->delete(['id'=>$id]);
        }


    }