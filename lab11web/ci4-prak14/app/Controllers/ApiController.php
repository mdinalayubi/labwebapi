<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    public function index()
    {
        log_message('info', 'Request Headers: ' . json_encode($this->request->getHeaders()));

        $data = [
            'status' => 'success',
            'message' => 'API is working',
        ];

        log_message('info', 'Response Data: ' . json_encode($data));

        return $this->respond($data);
    }
}
