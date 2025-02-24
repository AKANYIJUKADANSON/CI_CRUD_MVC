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


            // ---------------------- Prevent double data entry --------------------------
            // TODO => Get all the records in the table

            
            $user_data = $this->request->getPost();

            $model = model(DepartmentsModel::class);
            // dept code test
            $deptmt_code_existance = $model->checkDeptmtCode($user_data['department_code']);
            $deptmt_name_existance = $model->checkDeptmtName($user_data['department_name']);

            // $deptmt_name_existance = $model->checkDepartmentExistance($user_data['department_name']);

            // echo 'Code: '.$deptmt_code_existance['code'];
            // echo 'Name: '.$deptmt_name_existance;

            // Check if the data already exists using the get methon in the model
            if ($deptmt_code_existance != null) {
                // echo 'Department code "'. $deptmt_code_existance['code'] .'"' . ' is already taken, please try another one';

                $data['message'] = 'Department code "'. $deptmt_code_existance['code'] .'"' . ' is already taken, please use a different code';

                return view('edms/error', $data);

            }
            
            elseif ($deptmt_name_existance != null){
                 
                $data['message'] = 'Department name "'.$deptmt_name_existance['department_name'] .'"'. ' is already taken, please use a different name';

                 return view('edms/error', $data);
            }

            // ---- IF ALL IS CHECKED ------ VALIDATE AND SAVE THE DEPARTMENT ---------
            else{
                //check if user data was validated and if not redirect to the department page
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


                $data['message'] = 'Voila, department "'. $data['department_name'] .'"' . ' was added successfully';

                return view('edms/success', $data);

            }

        }
    }