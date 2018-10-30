<?php
class Capa {
    private $idCapa;
    private $codProjeto;
    private $imagCapa;
    private $unidade;
    private $curso;
    private $nomeFaculdade;
    Private $nomePessoa;
    private $nomeProjeto;
    Private $cidade;
    
   
   
    function set_idCapa($idCapa) {
        $this->idCapa = $idCapa;
    }
    function set_codProjeto($codProjeto) {
        $this->codProjeto = $codProjeto;
    }
    function set_nomePessoa($nomePessoa) {
        $this->nomePessoa = $nomePessoa;
    }
    function set_unidade($unidade) {
        $this->unidade = $unidade;
    }
    function set_curso($curso) {
        $this->curso = $curso;
    }
    function set_imgCapa($imagCapa) {
        $this->imagCapa = $imagCapa;
    }
    function set_nomeProjeto($nomeProjeto) {
        $this->nomeProjeto = $nomeProjeto;
    }
    function set_nomeFaculdade($nomeFaculdade) {
        $this->nomeFaculdade = $nomeFaculdade;
    }
    function set_cidade($cidade) {
        $this->cidade = $cidade;
    }

    function get_idCapa() {
        return $this->idCapa ;
    }
    function get_codProjeto() {
        return $this->codProjeto;
    }
    function get_nomePessoa() {
        return $this->nomePessoa;
    }
    function get_unidade() {
        return $this->unidade;
    }
    function get_curso() {
        return $this->curso;
    }
    function get_imgCapa() {
        return $this->imagCapa;
    }
    function get_nomeProjeto() {
        return $this->nomeProjeto;
    }
    function get_nomeFaculdade() {
        return $this->nomeFaculdade;
    }
    function get_cidade() {
        return $this->cidade;
    }
}
?> 