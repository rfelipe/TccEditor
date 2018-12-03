<?php 
	
	//inicia funcaço coneção;
	function conecta(){
		$username ='root'; 
		$password ='';
		
		$conn = new PDO('mysql:host=localhost;dbname=config', $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo=$conn;
		return $pdo;
		}
		
	//conecta com banco;
	try {
		conecta();
	} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
	}
	
	//verica usuario no banco;
	function selectPessoa($usuario,$senha){
			$conn=conecta();			
			$data = $conn->query('SELECT * FROM pessoa WHERE nome =' . $conn->quote($usuario) . 'AND senha =' . $conn->quote($senha));
			$dados_encontrados = $data->fetchAll(PDO::FETCH_OBJ);
			return ($dados_encontrados);	
		}

		
	//Consulta select com tabela e id;
	function select($Q,$id,$tabela){
			$conn=conecta();			
			$data = $conn->query('SELECT * FROM ' . $tabela . ' WHERE ' .$Q. ' = ' . $conn->quote($id));
			$dados_encontrados = $data->fetchAll(PDO::FETCH_OBJ);
			return ($dados_encontrados);	
		}
	function select2($Coluna,$id,$colunax,$idx,$tabela){
			$conn=conecta();			
			$data = $conn->query('SELECT * FROM ' . $tabela . ' WHERE '
			 .$Coluna. ' = ' . $conn->quote($id). ' AND '. $colunax . ' = ' . $conn->quote($idx));
			$dados_encontrados = $data->fetchAll(PDO::FETCH_OBJ);
			return ($dados_encontrados);	
		}
			
	//Inserir Pessoa
			function insertPessoa($a,$b,$c){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO pessoa(nome, senha,email) 
			VALUES(?,?,?)');
			$statement->execute(array($a,$b,$c));					
		}

	//Inserir Dados Projeto;
	function insertProjeto($a,$b){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO projeto(nomeprojeto, codpessoa) 
			VALUES(?,?)');
			$statement->execute(array($a,$b));
			$res=$conn->lastInsertId();
			return $res;
		}

	//Inserir Dados Capa;
	function insertCapa($a,$b,$c,$d,$e,$f,$g,$h){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO capa(unidade,curso, imagcapa, nomeprojeto, nomefaculdade, cidade, nomepessoa, codprojeto) 
			VALUES(?,?,?,?,?,?,?,?)');
			$statement->execute(array($a,$b,$c,$d,$e,$f,$g,$h));					
		}

	//Inserir Dados folha de rosto;
	function insertResumoRosto($a,$b,$c,$d){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO resumo(textoresumo, folharosto, codprojeto, orientador) 
			VALUES(?,?,?,?)');
			$statement->execute(array($a,$b,$c,$d));					
		}
		//Inserir Dados Resumo objetivo;
	function insertResumoObjetivo($a,$b,$c,$d,$e){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO resumo(textoresumo, folharosto, objetivo, codprojeto,orientador) 
			VALUES(?,?,?,?,?)');
			$statement->execute(array($a,$b,$c,$d,$e));					
		}

	//Inserir Capitulo;
	function insertCapitulo($a,$b,$c,$d,$e){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO capitulo(codrefimagem ,textocapitulo,textodecorra,codprojeto,subcod) 
			VALUES(?,?,?,?,?)');
			$statement->execute(array($a,$b,$c,$d,$e));					
		}

	//Inserir Dados Referencia;
	function insertReferencia($a,$b,$c,$d,$e){
		    $conn=conecta();		
			$statement = $conn->prepare('INSERT INTO referencia(codprojeto, autor, titulo, endereco, acessado) 
			VALUES(?,?,?,?,?)');
			$statement->execute(array($a,$b,$c,$d,$e));

		}

	//UPdate de dados do Funcionario ;	
	function insertUpdate($a,$b,$c,$d,$e,$f,$g,$id){
			$conn=conecta();								
			$statement = $conn->prepare('UPDATE funcionario SET id_func = ?, nome = ?, ender = ?, cid = ?, est = ?, sex = ?, sal = ? 
			 WHERE id_func= ?' );		
			$statement->execute(array($a,$b,$c,$d,$e,$f,$g,$id));
	
		}
	//Consulta DELETE com tabela e id e campo da tabela;
	function Delete($Q,$id,$tabela){
			$conn=conecta();			
			$data = $conn->query('DELETE FROM ' . $tabela . ' WHERE ' .$Q. ' = ' . $conn->quote($id));
		}
	
 ?> 