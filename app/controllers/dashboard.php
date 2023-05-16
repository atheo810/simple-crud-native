<?php
class Dashboard extends Controller
{
    public function index()
    {
        $this->view('component/header');
        $this->view('component/sidebar');
        $this->view('dashboard/dashboard');
        $this->view('component/footer');
    }
}
