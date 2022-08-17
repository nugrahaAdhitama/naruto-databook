<?php

class Arc extends Controller {
    public function index() {
        $data['judul'] = 'Arcs List';
        $data['arcs'] = $this->model('Arc_model')->getAllArcs();
        $this->view('templates/header', $data);
        $this->view('arc/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id) {
        $data['judul'] = 'Arc Detail';
        $data['arcs'] = $this->model('Arc_model')->getAllArcs();
        $this->view('templates/header', $data);
        $this->view('arc/detail', $data);
        $this->view('templates/footer', $data);
    }
}