<?php 

class Home extends Controller {
    public function index()
    {
        $data=[
            'content'=>'home/index',
            'judul'=>'Dashboard',
        ];
        $this->view('template/template', $data);
    }
}