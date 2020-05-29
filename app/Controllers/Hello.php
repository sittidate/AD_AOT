<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Hello extends Controller{
    public function index(){
        echo view('header');
        echo view('index');
        // echo base_url('vendor/fontawesome-free/css/all.min.css');
    }
}


?>
