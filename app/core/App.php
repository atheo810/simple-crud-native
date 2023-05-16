<?php
class App
{
    // protected untuk di pisah url, controller, method, dan params
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];


    // construct dari App
    public function __construct()
    {
        // buat parse URL
        $url = $this->parseURL();

        // check jika filenya ada timpa protected $controller dengan url yang diterima
        if (isset($url[0])) {

            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        // jika tidak ambil method $controller = "Home" 
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        // method
        if (isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controllers, method, dan params jika terdapat 
        call_user_func([$this->controller, $this->method], $this->params);
    }

    // pemisah URL
    public function parseURL()
    {
        // check jika menerima request dari URL
        if (isset($_GET['url'])) {

            // trim pemotongan slash
            $url = rtrim($_GET['url'], '/');

            // sanitize untuk pencegahan
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // keluarakan slash dari string
            $url = explode('/', $url);

            return $url;
        }
    }
}
