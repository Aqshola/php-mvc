<?php 

class ContohDb extends Controller {
    public function index()
    {
        $data['mhs']=$this->model("Mahasiswa_model")->getAllMahasiswa();
        var_dump($data);
    }
}