<?php
class Capitulo {
    private $codCapitulo;
    private $codProjeto;
    private $codRefImagem;
    private $textoCapitulo;
    private $textoDecorra;
    private $subcod;

    function set_codCapitulo($codCapitulo) {
        $this->codCapitulo = $codCapitulo;
    }
    function set_codProjeto($codProjeto) {
        $this->codProjeto = $codProjeto;
    }
    function set_codRefImagem($codRefImagem) {
        $this->codRefImagem = $codRefImagem;
    }
    function set_textoCapitulo($textoCapitulo) {
        $this->textoCapitulo = $textoCapitulo;
    }
    function set_textoDecorra($textoDecorra) {
        $this->textoDecorra = $textoDecorra;
    }
    function set_subcod($subcod) {
        $this->subcod = $subcod;
    }

    function get_codCapitulo() {
       return $this->codCapitulo;
    }
    function get_codProjeto() {
       return $this->codProjeto;
    }
    function get_codRefImagem() {
       return $this->codRefImagem;
    }
    function get_textoCapitulo() {
       return $this->textoCapitulo;
    }
    function get_textoDecorra() {
       return $this->textoDecorra;
    }
    function get_subcod() {
       return $this->subcod;
    }

}
?> 