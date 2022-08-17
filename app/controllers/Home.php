<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = "Naruto Databook";
        $data['arcs'] = $this->model('Arc_model')->getAllArcs();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}