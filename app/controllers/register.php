<?php
class Register extends Controller
{
    public function index()
    {
        $this->view('component/header');
        $this->view('register/register');
        $this->view('component/footer');
    }
}
