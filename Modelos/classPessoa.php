<?php
class Pessoa {
    private static $codPessoa;
    private static $nomePessoa;
   
   
    static function set_codPessoa($codPessoa) {
        self::$codPessoa = $codPessoa;
    }
   
    static function set_nomePessoa($nomePessoa){
    	self::$nomePessoa = $nomePessoa;
    }
    function get_codPessoa(){
    	return self::$codPessoa;
    }
    function get_nomePessoa(){
    	return self::$nomePessoa;
    }
}
?>
