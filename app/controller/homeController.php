<?php

require __DIR__.'/../model/contaModel.php';

class HomeController{

    public function index(){
        include __DIR__.'/../view/index.php';
    }

    public function contaView(){
        $conta = new ContaCorrente();
        $titular = $conta->titular();
        include __DIR__.'/../view/contaView.php';
    }
}