<?php

namespace App\Controllers;

use App\Models\Registermodal;

class Home extends BaseController
{
    public $registermodal;

    public function __construct()
    {
        $this->registermodal = new Registermodal();
    }

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $request = \Config\Services::request();

        $email = $request->getVar('email');
        $password = md5($request->getVar('password'));

        $data = $this->registermodal->loginData($email);

        if ($data->email == $email) {
            if ($password == $data->password) {
                
                $_SESSION['loginemail'] = $email; 
                $_SESSION['loginname'] = $data->name; 

                $this->session->setTempdata('msg', 'Login Details Success!', 300);
                $this->session->setTempdata('msg-class', 'alert-success', 300);
                return redirect()->to('/admin');

            } else {
                $this->session->setTempdata('msg', 'Password is incorrect! Try Again', 300);
                $this->session->setTempdata('msg-class', 'alert-danger', 300);
                return redirect()->to('/');
            }
        } else {
            $this->session->setTempdata('msg', 'You Email is incorrect', 300);
            $this->session->setTempdata('msg-class', 'alert-danger', 300);
            return redirect()->to('/');
        }
    }
}
