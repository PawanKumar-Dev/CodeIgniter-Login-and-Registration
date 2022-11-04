<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterLogin implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    helper('uri');
    if (session()->get("loginemail")) {
      return redirect()->to("/admin");
    }

    if (!session()->get("loginemail")) {
      return redirect()->to("/");
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // return redirect()->to('/admin');
  }
}
