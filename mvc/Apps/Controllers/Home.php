<?php

class Home{
    public function __construct(){
        echo "home controller \n";
    }
    public function index(){
        echo "index function \n";
    }
    public function home($data1, $data2){
        echo "home function with data1 = $data1 and data2 = $data2 \n";
    }
}