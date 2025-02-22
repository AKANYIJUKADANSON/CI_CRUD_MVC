<?php
    namespace App\Controllers;

use App\Models\DepartmentsModel;

    class EDMSController extends BaseController{
        public function dashboard(){
            $data['title'] = 'EDMS | Dashboard';
            return view("edms/dashboard", $data);


        }

        public function departments($id = null){
            // The form helper enables the Loading of some form functions
            helper('form');

            // Model
            $model = model(DepartmentsModel::class);

            $data = [
                'departments'=> $model->getDepartments(),
                'title' => 'Departments'
            ];

            return view("edms/departments", $data);
        }

        public function addDepartments(){
            helper('form');

            // Get user data
            $user_data = $this->request->getPost(['department_name', 'department_code']);

            // check if user data was validated and if not redirect to the department page
            if(! $this->validateData($user_data, [
                'department_name'=> 'required',
                'department_code'=> 'required|max_length[6]',
            ])){
                echo "<script> alert('Department was not successfully added, please try again'); </script>";
                return $this->departments($id=null);
            }

            // Get validated data
            $data = $this->validator->getValidated();

            // Save the data
            $model = model(DepartmentsModel::class);
            $model->save([
                'department_name'=> $data['department_name'],
                'code'=> $data['department_code'],
            ]);

            return $this->departments($id=null);
        }
    }