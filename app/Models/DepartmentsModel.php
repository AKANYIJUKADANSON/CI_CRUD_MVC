<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class DepartmentsModel extends Model
    {
        protected $table = "departments";

        protected $allowedFields = ['code', 'department_name'];

        // Get the list of users
        public function getDepartments($id=false){
            if($id === false){
                return $this->findAll();
            }

            // If the $Slug is given then get the user details
            return $this->where(['id'=> $id])->first();
        }

    }