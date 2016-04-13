<?php 
	//classe de conexõ com banco

	class banco{

		//FUNÇÃO DE INCLUSÃO
		function executa($query){
			$con = mysql_connect('localhost', 'root', 'mysql') or print (mysql_error());
			mysql_select_db('contadi', $con) or print(mysql_error());

			mysql_query($query, $con) or die("Erro no query ".mysql_error());

			mysql_close($con);
		}
		
		//FUNÇÃO DE PESQUISA	
		function pesquisa($query){
			$con = mysql_connect('localhost', 'root', 'mysql') or print (mysql_error());
			mysql_select_db('contadi', $con) or print(mysql_error());

			$result = mysql_query($query, $con);

			mysql_close($con);

			return $result;
		}

		//FUNÇÃO DE CADASTRO RETORNANDO ID	
		function executaid($query){
			$con = mysql_connect('localhost', 'root', 'mysql') or print (mysql_error());
			mysql_select_db('contadi', $con) or print(mysql_error());

			mysql_query($query, $con) or die("Erro no query id".mysql_error());
			$id = mysql_insert_id();

			mysql_close($con);

			return $id;
		}

	}

 ?>