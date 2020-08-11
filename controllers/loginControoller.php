<?php

class Login extends controller {

    public function index() {
        $dados = array();

        $contatos = new Contatos();
        $dados['lista'] = $contatos->getAll();


        $this->loadView('login', $dados);
    }

}
