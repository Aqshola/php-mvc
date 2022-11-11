<?php 

class NotFound extends Controller {
    public function index()
    {
        $data=[
            'content'=>'utils/404',
            'judul'=>'NOT FOUND',
        ];
        $this->view('template/template', $data);
    }
}