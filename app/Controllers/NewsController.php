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
            // $data = $this->request->getPost(['title', 'body']);

            // Check if the data is validated and if not redirect them to form for input
            if (! $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required|min_length[10]|max_length[5000]',
            'created_on' => 'required|min_length[8]|max_length[10]',
            ])){

            // Return the user to the form input page using the new() method
            return $this->new();
            }

            // if the data is validated, then capture it
            $post = $this->validator->getValidated();

            // Create instance of the newsmodel class
            $model = model(NewsModel::class);

            // Save the data to the database using the save() method and the NewsModel class
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

    }