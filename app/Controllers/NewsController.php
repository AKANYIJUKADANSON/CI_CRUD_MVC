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
    }