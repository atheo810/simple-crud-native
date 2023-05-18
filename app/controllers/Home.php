<?php

class Home extends Controller
{
    public function index($judul = "Home")
    {
        $data['judul'] = $judul;

        $this->view('component/header', $data);
        $this->view('home/index', $data);
        $this->view('component/footer');
    }
}
