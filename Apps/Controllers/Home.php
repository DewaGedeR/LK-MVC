<?php

class Home extends Controller{

    private $dt;
    private $df;
    public function __construct(){
        $this->dt = $this->loadmodel("barang");
        $this->df = $this->loadmodel("daftarBarang");
    }
    public function index(){
        echo "index function \n";
    }
    public function home($data1, $data2){
        echo "home function with data1 = $data1 and data2 = $data2 \n";
    }
    public function lihatData($id){
        $data = $this->df->getDataById($id);

        $this->loadview('templates/header',['title'=>'Detail Barang']);
        $this->loadview('home/detailBarang',$data);
        $this->loadview('templates/footer');  
    }
    public function listBarang(){ 
        $data = $this->df->getDataAll();

        $this->loadview('templates/header',['title'=>'List Barang']);
        $this->loadview('home/listBarang',$data);
        $this->loadview('templates/footer');
    }

    public function insertBarang(){
        if (!empty($_POST)) {
            if($this->df->tambahBarang($_POST)){
                header('Location: '.BASE_URL.'index.php?r=home/listbarang');
                exit;
            }
        }
        $this->loadview('templates/header',['title'=>'Insert Barang']);
        $this->loadview('home/insert');
        $this->loadview('templates/footer');
    }

    public function updateBarang($id){
        $data = $this->df->getDataById($id);

        if (!empty($_POST)) {
            if($this->df->updateBarang($_POST)){
                header('Location: '.BASE_URL.'index.php?r=home/listbarang');
                exit;
            }
        }

        $this->loadview('templates/header',['title'=>'Update Barang']);
        $this->loadview('home/update',$data);
        $this->loadview('templates/footer');
    }

    public function deleteBarang($id){
        $data = $this->df->getDataById($id);

        if($this->df->hapusBarang($id)){
            header('Location: '.BASE_URL.'index.php?r=home/listbarang');
            exit;
        }
    }
}