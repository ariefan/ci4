<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function getPesan($nama = "Pengunjung")
    {
        $data = [
            "pesan" => "Selamat datang",
            "nama" => $nama,
        ];
        return view("test", $data);
    }

    public function getLokasi()
    {
        return view("lokasi");
    }
}
