<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function menuPage()
    {
        return view('admin/menuPage');
    }

    public function orderPage()
    {
        return view('admin/orderPage');
    }
}
