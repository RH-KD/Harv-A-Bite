<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landingPage');
    }

    public function login()
    {
        return view('user/login');
    }

    public function signup()
    {
        return view('user/signup');
    }

    public function moodBoard()
    {
        return view('user/moodBoard');
    }

    public function roadMap()
    {
        return view('user/roadMap');
    }
}
