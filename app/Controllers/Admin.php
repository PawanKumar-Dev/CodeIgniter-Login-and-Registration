<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
