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
            helper('form');
            // TODO ---- Check if the user already exits using username and email

            // Capture user data
            // if(!$this->request->getPost()){
            //     // redirect user to form
            //     return $this->users() ;
            // }

            $user_data = $this->request->getPost();
            // Get a list of all registered users
            $model = model(UsersModel::class);
            $useremailExistance = $model->checkEmailExistance($user_data['user_email']);

            if($useremailExistance != null){
                $data = [
                    'status' => 'Email "'. $user_data['user_email'] .'"' . ' is already taken, please use a different email or login',
                    'redirect_page' => '/edms/auth',
                    'color' => 'danger',
                    'icon' => 'bi bi-exclamation-triangle-fill'
                ];
    
                session()->setFlashdata($data);
                return redirect()->to('/edms/auth'); 


                // return view('edms/error', $data);
            }else{

                // validate the data
                if(! $this->validateData($user_data, [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'user_email' => 'required',
                    'role' => 'required',
                    'user_password' => 'required',
                ])){

                    $data = [
                        'status' => "Data validation error",
                        'color' => 'danger',
                        'icon' => 'bi bi-exclamation-triangle-fill'
                    ];
        
                    session()->setFlashdata($data);
                    return redirect()->to('/edms/auth');
                }

                //get validated data
                $user = $this->validator->getValidated();

                // Save the validated data
                $model->save(
                    [
                        'first_name'=> $user['first_name'],
                        'last_name'=> $user['last_name'],
                        'email'=> $user['user_email'],
                        'role'=> $user['role'],
                        // encrypt the password
                        'password'=> sha1($user['user_password']),
                    ]
                );

                $data = [
                    'status' => "User added successfully",
                    'color' => 'success',
                    'icon' => 'person-fill-check'
                ];
    
                session()->setFlashdata($data);
                return redirect()->to('/edms/auth'); 
            }
            
        }

        public function edit($id=null){

            $model = model(UsersModel::class);
            $data['user'] = $model->getUsers($id);
            
            return view('/edms/update', $data);
        }

        public function updateUser($id){
            helper('form');
            helper('url');
            // $this->helper('url');
            // get the data from user
            $user_data = $this->request->getPost();

            // validate the data
            if(! $this->validateData($user_data, [
                'first_name' => 'required',
                'last_name' => 'required',
                'user_email' => 'required|valid_email',
                'role' => 'required',
            ])){
                // echo "Data validation error";
                // return $this->users();
                $data = [
                    'status' => "Data validation error",
                    'color' => 'danger',
                    'icon' => 'exclamation-triangle-fill'
                ];
    
                session()->setFlashdata($data);
                return $this->users();

            }

            // save the validated data
            $updated_data = $this->validator->getValidated();

            // echo $updated_data["role"];

            $model = model(UsersModel::class);

            $model->updateUser($id, $updated_data);
            $data = [
                'status' => "User updated successfully",
                'color' => 'success',
                'icon' => 'bi bi-person-fill-check'
            ];

            session()->setFlashdata($data);
            return redirect()->to('/edms/auth'); 

        }

        public function deleteUser($id=null){
            // echo "Item to delete id: ".$id;

            $model = model(UsersModel::class);

            $model->deleteUser($id);
            $data = [
                'status' => "User deleted successfully",
                'color' => 'success',
                'icon' => 'bi bi-person-fill-dash'
            ];

            session()->setFlashdata($data);
            return redirect()->to('/edms/auth'); 
        }

    }