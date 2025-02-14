<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($page="home")
    {
        
        $data['title'] = ucfirst("home"); // Capitalize the first letter
        return view('templates/header', $data) 
                .view('templates/navbar')
                .view('pages/'.$page)
                .view('templates/footer');
        
    }
}
