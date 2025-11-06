<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function menuPage()
    {
        return view('admin/menuPage');
    }
}
