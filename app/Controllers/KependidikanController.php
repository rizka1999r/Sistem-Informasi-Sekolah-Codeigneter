<?php

namespace App\Controllers;
use App\Models\KependidikanModel;
use mysqli;

class KependidikanController extends BaseController
{
    protected $KependidikanModel;
    public function __construct()
    {
        $this->KependidikanModel  =new kependidikanModel ();
    }
    public function Kependidikan()
    {
        $kependidikan = $this->KependidikanModel ->findAll();
        $data = [
        'title' => 'Tenaga Kependidikan',
        'kependidikan' => $kependidikan
        ];
        return view('Pages/Profilsekolah/Kependidikan',$data);
    }
}
