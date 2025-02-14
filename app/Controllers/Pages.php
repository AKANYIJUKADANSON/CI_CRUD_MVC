<?php
    namespace App\Controllers;

    // importing the PageNotFoundException class which will avail the exeption page not found
    use CodeIgniter\Exceptions\PageNotFoundException;

    class Pages extends BaseController
    {
        public function index(string $page="home")
        {
            // First check if the file exixts and if not, then display a message expection
            if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
                // Whoops, we don't have a page for that!
                throw new PageNotFoundException($page. " page not found");
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            return view('templates/header', $data)
                .view('templates/navbar')
                . view('pages/' . $page)
                . view('templates/footer');
        }
    }