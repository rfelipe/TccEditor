<?php
class Resumo {
    private $codResumo;
    private $codProjeto;
    private $textoResumo;
    private $abstract;
    private $folharosto;

    function set_codResumo($codResumo) {
        $this->codResumo = $codResumo;
    }  
    function set_textoResumo($textoResumo) {
        $this->textoResumo = $textoResumo;
    }
    function set_abstract($abstract) {
        $this->abstract = $abstract;
    }
    function set_codProjeto($codProjeto) {
        $this->codProjeto = $codProjeto;
    }
     function set_folharosto($folharosto){
        $this->folharosto = $folharosto;
     }

    function get_codResumo(){
        return $this->codResumo;
    }
    function get_codProjeto(){
        return $this->codProjeto;
    }
    function get_textoResumo(){
        return $this->textoResumo;
    }
    function get_abstract(){
    	return $this->abstract;
    }
    function get_folharosto(){
        return $this->folharosto;
    }

}
?> 