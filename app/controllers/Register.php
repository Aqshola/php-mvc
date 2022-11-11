<?php 

class Register extends Controller {
    public function index()
    {
        $data=[
            'content'=>'auth/register',
            'judul'=>'Register'
        ];
        $this->view('template/template', $data);
    }
}