<?php
class Projeto {
    private $codProjeto;
    private $nomeProjeto;
    private $codPessoa;
   
    function set_codProjeto($codProjeto) {
        $this->codProjeto = $codProjeto;
    }
    function set_nomeProjeto($nomeProjeto) {
        $this->nomeProjeto = $nomeProjeto;
    }
    function set_codPessoa($codPessoa) {
        $this->codPessoa = $codPessoa;
    }

    function get_codProjeto(){
    	return $this->codProjeto;
    }
    function get_nomeProjeto(){
        return $this->nomeProjeto;
    }
    function get_codPessoa(){
        return $this->codPessoa;
    }
}
?> 