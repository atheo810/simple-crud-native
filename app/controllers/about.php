<?php
class About extends Controller
{
    public function index($judul = 'About')
    {
        $data['judul'] = $judul;
        $data['data'] = $this->getModel('User_model')->getUser();

        $this->view('component/header', $data);
        $this->view('component/navbar');
        $this->view('about/index', $data);
        $this->view('component/footer');
    }
}
