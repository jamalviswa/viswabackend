<?php

namespace App\Controller;


class AboutController extends AppController
{

    public function index()
    {
        
        $this->viewBuilder()->setLayout("front");
       
    }
}
