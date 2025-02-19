<?php

    namespace App\Controllers;

use App\Models\AuthModel;

    class FormController extends BaseController{

        protected $helpers = ['form'];

        public function signup(){
            helper("form");

            // Check if the request method is post
            if(!$this->request->is('post')){
                // return view('forms/signup', ['title'=> 'Sign Up']);
                return view('templates/header', ['title' => 'Sign Up'])
                    .view('forms/signup')
                    .view('templates/footer');
 
            }

            $rules = [
                'username' => 'required|max_length[30]',
                'password' => 'required|max_length[255]|min_length[8]',
                'passconf' => 'required|max_length[255]|matches[password]',
                'email'    => 'required|max_length[254]|valid_email',
            ];

            // Capture the data
            $user_data = $this->request->getPost();

            // Validate the data captured
            if (! $this->validateData($user_data, $rules)){
                // return to sign up form
                return view('templates/header', ['title'=> 'Sign Up'])
                    .view('forms/signup', ['errors' => $this->validator->getErrors()]);
            }

            // Get the model and save the data
            $model = model(AuthModel::class);

            // Hash the password
            $new_password = sha1($user_data['password']);

            $model->save(
                [
                    'username'=> $user_data['username'],
                    'email'=> $user_data['email'],
                    'password'=> $new_password,
                ]
            );

            $data = [
                'user_name' => $user_data['username'],
                'title'=> 'Auth| Login',
                'auth' => true,
            ];

            // return the success page
            return view('/forms/login', $data);
            

        }

        public function login(){
            helper("form");

            // Check if the request method is post
            if(!$this->request->is('post')){
                // return view('forms/signup', ['title'=> 'Sign Up']);
                return view('templates/header', ['title' => 'Sign Up'])
                    .view('forms/signup')
                    .view('templates/footer');
 
            }

            // Capture the data
            $user_data = $this->request->getPost();
        }
    }