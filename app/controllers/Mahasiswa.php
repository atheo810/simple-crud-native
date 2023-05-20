<?php
class Mahasiswa extends Controller
{
    public function index($judul = "Mahasiswa")
    {
        $data['judul'] = $judul;
        $data['mahasiswa'] = $this->getModel('Mahasiswa_model')->getAllMahasiswa();
        $this->view('component/header', $data);
        $this->view('component/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('component/footer');
    }
}
