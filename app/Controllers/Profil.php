<?php

namespace App\Controllers;

use App\Models\PendidikModel;
use mysqli;

class Profil extends BaseController
{
/*     protected $PendidikModel;
    public function __construct()
    {
        $this->PendidikModel =new pendidikModel();
    } */
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
/*     public function Pendidik()
    {
        $pendidik = $this->PendidikModel->findAll();
        $data = [
        'title' => 'Tenaga Pendidik',
        'Pendidik' => $pendidik
        ];
        return view('Pages/Profilsekolah/Pendidik',$data);
    } */
/*     public function Kependidikan()
    {
        $data = [
            'title' => 'Tenaga Kependidikan',
            
        ];
        return view('Pages/Profilsekolah/Kependidikan', $data);
    } */
    public function Komite()
    {
        $data = [
        'title' => 'Komite'
        ];
        return view('Pages/Profilsekolah/Komite',$data);
    }
    public function identitas()
    {
        $data = [
        'title' => 'Identitas Sekolah'
        ];
        return view('Pages/Profilsekolah/identitas',$data);
    }
    public function pelengkap()
    {
        $data = [
        'title' => 'Data Pelengkap Sekolah'
        ];
        return view('Pages/Profilsekolah/pelengkap',$data);
    }
    public function Periodik()
    {
        $data = [
        'title' => 'Data Periodik'
        ];
        return view('Pages/Profilsekolah/Periodik',$data);
    }
    public function Lainnya()
    {
        $data = [
        'title' => 'Data Lainnya'
        ];
        return view('Pages/Profilsekolah/Lainnya',$data);
    }
}
?>
