<?php

    namespace App\Controllers;

    use App\Models\NewsModel;

    class NewsController extends BaseController{
        public function index(){
            // create the news model instance
            $newsModel = model(NewsModel::class);

            // use the model to get all the data and pass it through to the views
            $data = [
                'news_list' => $newsModel->getNews(),
                'title' => 'News List'
            ];

            // echo ("Welcome to the all news field");
            // return the views and templates and pass the data
            return view('templates/header', $data)
            .view('news/news')
            .view('templates/footer');
        }

        // displaying single news item
        public function show(?string $id = null){
            // Create the news model instance
            $newsModel = model(NewsModel::class);

            $data = [
                'news_details' => $newsModel->getNews($id),
                'title' => 'Single News Item'
            ];

            // return the views and templates and pass the data
            return view('templates/header', $data)
                    .view('news/snews')
                    .view('templates/footer');
        }

        // Making a post
        public function new(){

            // The form helper enables the Loading of some form functions
            helper('form');


            // Displaying the  form elements
            $data['title'] = 'Add post';
            return view('templates/header', $data)
                .view('news/Create')
                .view('templates/footer');

        }

        // Method/function to capture the data, validte and store it in the database
        public function create(){
            // Load the form helper to access some of the form functions
            helper('form');
            // get the data for validation
            $data = $this->request->getPost(['title', 'body']);
            /**
             * Check if the data is validated and if not return to form input
             * validate() is a Controller-provided helper function
             */
            if (! $this->validateData($data, [
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required|min_length[10]|max_length[5000]',
            'created_on' => 'required|min_length[8]|max_length[10]',
            ])){
                /**
                 * Return the user to the form input page using the new()
                 * method in case the validation is not correct
                */
                return $this->new();
            }
            // if the data is validated, then capture it
            $post = $this->validator->getValidated();
            // Create instance of the newsmodel class
            $model = model(NewsModel::class);
            // Save data to db using the save() and the NewsModel class
            $model->save(
            [
                'title' => $post['title'],
                'slug' => url_title($post['title'], '_', true),
                'body' => $post['body']
                ]
            );
            $data = [
                'title' => 'Success',
                'message' => 'Success',
            ];
            // If the post is saved then display a success page
            return view('templates/header', $data)
                    .view('news/success')
                    .view('templates/footer');
        }

        // Deleting a specific item
        public function delete($slug){
            // Get the id of the news to delete
            $model = model(NewsModel::class);
        
            // use the model to delete the news
            $model->deleteNews($slug);
        
            // Display the success page if a record is deleted
            $data = [
              'message' => 'Success',
              'title' => 'Success'
            ];
        
            return view('templates/header', $data)
                    .view('news/success')
                    .view('templates/footer');
        
        }


        public function loadItemToUpdate($slug){

            helper('form');
            // Create instance of the newsmodel class
            $model = model(NewsModel::class);
        
            // First load data to update from the datadase
            $data = [
                'itemToUpdate' => $model->getNews($slug),
                'title' => 'Update Record'
            ];

            return view('news/update', $data);
        }


        // Loading the news form with the current data of the selected item to update
        public function update($slug){
            helper('form');
            /**
             * -------------------- Data Validation -------------------
             * check if the data is not validated and then redirect the user to the 
             * update page
             */
             if(! $this->validate(
                // Add validation rules (Key => Value format)
                [
                    'title' => 'required|min_length[3]|max_length[255]',
                    'body' => 'required|min_length[10]|max_length[5000]',
                    'created_on' => 'required|min_length[8]|max_length[10]',
                ]
             )){
                // return user to form input
                return $this->loadItemToUpdate($slug);
             }
            // If all the validation checks are sorted, then get the validated data 
            // using the validator()
            $updated_data = $this->validator->getValidated();
            // Create instance of the newsmodel class
            $model = model(NewsModel::class);
            // do the update using the updateNews method
            $model->updateNews($slug, $updated_data);
            // return redirect()->to('http://localhost:8080/news');
            return $this->index();
        }

    }