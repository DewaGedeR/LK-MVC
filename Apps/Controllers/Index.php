<?php

class Index{
    public function __construct(){
        echo "index controller with\n";
    }
    public function index($data1, $data2){
        echo "index function with data1 = $data1 and data2 = $data2\n";
    }
    public function home(){
        echo "home function \n";
    }
}