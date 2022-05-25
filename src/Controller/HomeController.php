<?php

namespace App\Controller;


class HomeController extends AppController
{

    public $layout = 'front';
    public function index()
    {
        
        $this->viewBuilder()->setLayout("front");
       
    }
}
