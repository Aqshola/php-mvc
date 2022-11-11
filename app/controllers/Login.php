<?php 

class Login extends Controller {
    public function index()
    {
        $data=[
            'content'=>'auth/login',
            'judul'=>'Login'
        ];
        return $this->view('template/template', $data);
    }

    public function post(){
        $method=$this->checkMethod();

        if($method!=='POST'){
            echo "Not Allowed";
        }else{
            
        }
    }

    public function detailuser($id=null){
        if($id==null){
            header('Location: '.BASEURL.'/notfound');
        }
        echo 'detail user '.$id;
    }
}