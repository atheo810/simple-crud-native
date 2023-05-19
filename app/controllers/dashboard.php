<?php
class Dashboard extends Controller
{
    public function index($judul = 'Dashboard')
    {
        $data['judul'] = $judul;

        $this->view('component/header', $data);
        $this->view('component/navbar');
        $this->view('dashboard/dashboard');
        $this->view('component/footer');
    }
}