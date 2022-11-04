<?php
namespace App\Controllers;
use App\Models\Registermodal;

class Register extends BaseController
{
  public $registermodal;

  public function __construct()
  {
    $this->registermodal = new Registermodal();
  }

  public function index()
  {
    return view('register');
  }

  public function signup()
  {
    $request = \Config\Services::request();

    $password = md5($request->getVar('password'));
    $insData = [
      'name' => $request->getVar('name'),
      'email' => $request->getVar('email'),
      'password' => $password
    ];

    if ($this->registermodal->insertData($insData)) {
      $this->session->setTempdata('msg', 'Registration Successfully', 300);
      $this->session->setTempdata('msg-class', 'alert-success', 300);
      return redirect()->to('/');

    } else {

      $this->session->setTempdata('msg', 'Registration Failed', 300);
      $this->session->setTempdata('msg-class', 'alert-danger', 300);
      return redirect()->to('/');
    }
  }
}
