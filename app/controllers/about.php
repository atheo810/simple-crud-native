<?php
class About extends Controller
{
    public function index($judul = 'About')
    {
        $data['judul'] = $judul;

        $this->view('component/header', $data);
        $this->view('component/navbar');
        $this->view('about/index');
        $this->view('component/footer');
    }
}
