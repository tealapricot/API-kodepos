<?php

namespace App\Controllers;

use App\Models\KodePosModel;
use CodeIgniter\RESTful\ResourceController;

class Kodepos extends BaseController
{

    public function __construct()
    {
        $this->model = new KodePosModel();
    }

    public function index()
    {
        return $this->response->setJSON($this->model->findAll());
    }
    public function kode($id = null)
    {
        return $this->response->setJSON($this->model->where('postal_code', $id)->findAll());
    }
    public function kota($id = null)
    {
        return $this->response->setJSON($this->model->where('city', $id)->findAll());
    }
    public function kecamatan($id = null)
    {
        return $this->response->setJSON($this->model->where('district', $id)->findAll());
    }
    public function desa($id = null)
    {
        return $this->response->setJSON($this->model->where('subdistrict', $id)->findAll());
    }
}
