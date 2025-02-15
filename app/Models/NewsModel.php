<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class NewsModel extends Model{
        // define th table
        protected $table = "news";

        // Method to get the news or load single item if the id is provided
        public function getNews($slug=false){
            // Check if there is no slug provided then load the data
            if(!$slug === false){
                // use the findAll() function to roald all the data
                $this->findAll();
            }

            // In case the id for a specific item is provided then be retrieved instead of all
            return $this->where("slug",$slug)->first();
        }



    }