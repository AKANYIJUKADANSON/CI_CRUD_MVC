<?php
namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class ProductsController extends BaseController
{
    public function index(string $page="products"){
        // check if the file to request is available
        if (! is_file(APPPATH."Views/products/".$page.".php")) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page . " xxx page is not found");
        }

        $data['title'] = ucfirst("products"); // Capitalize the first letter
        // User logged in
        $data['auth_user'] = 'John Doe';
        $data['productList'] = 'EDOCs, EDMS, EHRs, EMRs, and PHRs';
        
        // otherwise display the page
        return view('templates/header', $data)
            .view('templates/navbar' )
            .view('products/'.$page)
            .view('templates/footer');
  
    }
}