<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class ServicesController extends BaseController
{
    public function index(string $page="services")     
    {
        // First check if the file exixts and if not, then display a message expection
        if(! is_file(APPPATH. "Views/services/".$page.".php")) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page. " kabisa page not found");
        }


        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view("templates/header", $data) 
        . view("templates/navbar")
        . view("services/".$page) 
        . view("templates/footer");
            
    }
}