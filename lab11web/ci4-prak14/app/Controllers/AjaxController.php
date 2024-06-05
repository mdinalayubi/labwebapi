<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\Response;
use App\Models\ArtikelModel;
class AjaxController extends controller
{
    public function index()
    {
        return view('ajax/index');
    }
    public function getData()
    {
        $model = new ArtikelModel();
        $data = $model->findAll();
        // Kirim data dalam format JSON
        return $this->response->setJSON($data);
    }
    public function delete($id)
    {
        $model = new ArtikelModel();
        $data = $model->delete($id);
        $data = [
            'status' => 'OK'
        ];
        // Kirim data dalam format JSON
        return $this->response->setJSON($data);
    }
}
    
