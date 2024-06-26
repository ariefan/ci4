<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface
    $response, $arguments = null)
    {
        // Do something here
    }
}
