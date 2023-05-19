<?php
class Mahasiswa extends Controller
{
    public function index($judul = "Mahasiswa"){
        $data['judul'] = $judul;
        $this->view('component/header', $data);
        $this->view('component/navbar');
        $this->view('mahasiswa/index');
        $this->view('component/footer');
    }
}
