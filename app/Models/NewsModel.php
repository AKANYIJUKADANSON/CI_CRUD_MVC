<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class NewsModel extends Model{
        // define th table
        protected $table = "news";

        // Method to get the news or load single item if the id is provided
        public function getNews($slug=false){
            // Check if there is no slug provided then load the data
            if($slug === false){
                // use the findAll() function to roald all the data
                return $this->findAll();
            }

            // In case the id for a specific item is provided then be retrieved instead of all
            return $this->where(["id" =>$slug])->first();
        }


        // Add allowed fields to add or update, id is auto-generated
        protected $allowedFields = ['title', 'slug', 'body', 'created_on'];


        // Deleting a specific record using the id provided
        public function deleteNews($slug){
            return $this->where('id', $slug)->delete();
        }

        // Updating a record
        public function updateNews($slug){
            return $this->where('id', $slug)->update();
        }

    }