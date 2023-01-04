<?php

namespace App\Controllers;
use App\Models\PendidikModel;
use mysqli;

class PendidikController extends BaseController
{
    protected $PendidikModel;
    public function __construct()
    {
        $this->PendidikModel =new pendidikModel();
    }
    public function Pendidik()
    {
        $pendidik = $this->PendidikModel->findAll();
        $data = [
        'title' => 'Tenaga Pendidik',
        'Pendidik' => $pendidik
        ];
        return view('Pages/Profilsekolah/Pendidik',$data);
    }
    public function Home()
    {
        $Home = $this->PendidikModel->findAll();
        $data = [
        'title' => 'Tenaga Pendidik',
        'Home' => $Home
        ];
        return view('Pages/Home',$data);
    }
}
