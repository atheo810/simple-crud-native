<?php
class Controller
{
    public function view($view, $data = [])
    {
        require '../app/views/component/header.php';
        require '../app/views/component/navbar.php';
        require '../app/views/' . $view . '.php';
        require '../app/views/component/footer.php';
    }
}
