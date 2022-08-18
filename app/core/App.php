<?php
// error_reporting(0); error reporting kita disable

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        /** 
         * Fixed warning:
         * Trying to access array offset on value of type
         * null in </~> on line 16.
         * 
        */
        if (!isset($url[0])) $url[0] = $this->controller;

        // parse controller
        if(file_exists('../app/controllers/'. $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require '../app/controllers/'. $this->controller. '.php';
        $this->controller = new $this->controller;

        // parse method
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // parse params
        if(!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // bikin method parseUrl
    public function parseUrl()
    {
        if ( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}