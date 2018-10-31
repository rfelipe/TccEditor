<?php
class Pessoa {
    private static $codPessoa;
    private static $nomePessoa;
    private static $senha;
   
   
    static function set_codPessoa($codPessoa) {
        self::$codPessoa = $codPessoa;
    }
   
    static function set_nomePessoa($nomePessoa){
    	self::$nomePessoa = $nomePessoa;
    }
    static function set_senha($senha){
        self::$senha = $senha;
    }

    function get_codPessoa(){
    	return self::$codPessoa;
    }
    function get_nomePessoa(){
    	return self::$nomePessoa;
    }
    function get_senha(){
        return self::$senha;
    }
}
?>
