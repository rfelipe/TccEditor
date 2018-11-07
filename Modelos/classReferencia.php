<?php
class Refencia {
  private $codreferencia;
  private $codprojeto;
  private $autor;
  private $titulo;
  private $endereco;
  private $acessado;
    
   
   
    function set_codrefencia($codreferencia) {
        $this->$codreferencia = $codreferencia;
    }

    function set_codprojeto($codprojeto) {
        $this->$codprojeto = $codprojeto;
    }

    function set_autor($autor) {
        $this->$autor = $autor;
    }

    function set_titulo($titulo) {
        $this->$titulo = $titulo;
    }

    function set_endereco($endereco) {
        $this->$endereco = $endereco;
    }

    function set_acessado($acessado) {
        $this->$acessado = $acessado;
    }


    function get_codreferencia() {
        return $this->$codreferencia ;
    }

    function get_codprojeto() {
        return $this->$codprojeto ;
    }

    function get_autor() {
        return $this->$autor ;
    }

    function get_titulo() {
        return $this->$titulo ;
    }

    function get_endereco() {
        return $this->$codreferencia ;
    }

    function get_acessado() {
        return $this->$acessado ;
    }
}
?> 