<?php

namespace App\Controllers;
use App\Models\PendidikModel;
use App\Models\BeritaModel;

class Home extends BaseController
{
    protected $PendidikModel;
    protected $BeritaModel;
    public function __construct()
    {
        $this->PendidikModel =new pendidikModel();
        $this->BeritaModel =new beritaModel();
    }
    public function index()
    {
        $pendidik = $this->PendidikModel->findAll();
        $berita= $this->BeritaModel->findAll();
        $data = [
        'title' => 'Home' ,
        'Pendidik' => $pendidik ,
        'Berita' => $berita
        ];
        return view('Pages/Home',$data);
    }
    public function Ekstra()
    {
        $data = [
        'title' => 'ekstrakurikuler'
        ];
        return view('Pages/ekstrakurikuler',$data);
    }
    public function Kontak()
    {
        $data = [
        'title' => 'Kontak'
        ];
        return view('Pages/kontak',$data);
    }
    public function Prestasi()
    {
        $data = [
        'title' => 'Prestasi'
        ];
        return view('Pages/Prestasi',$data);
    }
    public function Profil()
    {
        $data = [
        'title' => 'Profil Sekolah'
        ];
        return view('Pages/Profilsekolah',$data);
    }
    public function Sejarah()
    {
        $data = [
        'title' => 'Sejarah'
        ];
        return view('Pages/Profilsekolah/Sejarah',$data);
    }
    public function Visi()
    {
        $data = [
        'title' => 'Visi'
        ];
        return view('Pages/Profilsekolah/Visi',$data);
    }
    public function Sarana()
    {
        $data = [
        'title' => 'Sarana dan Prasarana'
        ];
        return view('Pages/Profilsekolah/Sarana',$data);
    }
}
