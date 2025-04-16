<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data["page_title"] = "Home";
        return $this->render('home', $data);
    }

    public function about()
    {
        $data["page_title"] = "About Us";
        return $this->render('about', $data);
    }

    public function contact()
    {
        $data["page_title"] = "Contact";
        return $this->render('contact', $data);
    }

    public function services()
    {
        $data["page_title"] = "Services";
        return $this->render('services', $data);
    }

    // function to render the pages
	public function render($route, $data = [])
	{
	    echo view('layout/header', $data);
		echo view('pages/'.$route, $data);
        echo view('layout/footer', $data);
	}
}
