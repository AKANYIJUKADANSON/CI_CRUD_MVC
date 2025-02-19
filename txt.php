<?php

    namespace App\Controllers;

    class FormController extends BaseController{

        protected $helpers = ['form'];

        // Save Your Rules
        public array $signup = [
            'username'     => 'required|max_length[30]',
            'password'     => 'required|max_length[255]',
            'pass_confirm' => 'required|max_length[255]|matches[password]',
            'email'        => 'required|max_length[254]|valid_email',
        ];


    
        public array $signup_errors = [
            'username' => [
                'required' => 'You must choose a username.',
            ],
            'email' => [
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ];

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
                'password' => 'required|max_length[255]|min_length[10]',
                'passconf' => 'required|max_length[255]|matches[password]',
                'email'    => 'required|max_length[254]|valid_email',
            ];

            // Capture the data
            $data = $this->request->getPost();

            // Validate the data captured
            if (! $this->validateData($data, $rules)){
                // return to sign up form
                return view('forms/signup', ['errors' => $this->validator->getErrors()]);
            }

            // Get validated data in case you want to
            $validatedData = $this->validator->getValidated();


            // return the success page
            return view('forms/success');

        }
    }