<?php

namespace App\Controllers;
use App\Models\BeritaModel;


class BeritaController extends BaseController
{
    protected $BeritaModel;
    public function __construct()
    {
        $this->BeritaModel =new beritaModel();
    }
    public function Berita()
    {
        $berita = $this->BeritaModel->findAll();
        $data = [
        'title' => 'Berita',
        'Berita' => $berita
        ];
        return view('Pages/Berita',$data);
    }
}
