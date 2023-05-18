<?php
class About extends Controller
{
    public function index()
    {
        $this->view('component/header');
        $this->view('about/index');
        $this->view('component/footer');
    }
}
