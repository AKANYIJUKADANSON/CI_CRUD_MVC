<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class DepartmentsModel extends Model
    {
        protected $table = "departments";

        protected $allowedFields = ['id', 'code', 'department_name', 'activation_status'];

        // Get the list of users
        public function getDepartments($id=false){
            if($id === false){
                return $this->findAll();
            }

            // If the $Slug is given then get the user details
            return $this->where(['code'=> $id])->first();
        }

        public function checkDeptmtCode($department_code){
            // If the $Slug is given then get the user details
            return $this->where(['code'=> $department_code])->first();
        }

        public function checkDeptmtName($department_name){
            // If the $Slug is given then get the user details
            return $this->where(['department_name'=> $department_name])->first();
        }

        // ---------------- Activate department button functionality
        public function activateDepartment($department_id, $updated_data){
            return $this->update(['id'=>$department_id], $updated_data);
        }

        // ---------------- Deactivate department button functionality
        public function deactivateDepartment($department_id, $updated_data){
            return $this->update(['id'=>$department_id], $updated_data);
        }

    }