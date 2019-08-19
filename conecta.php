<?php


	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "etecmcm";

	$conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

	/*if($conexao->connect_error){
//o Bom dessa função é que além de mostrar que deu um erro, mostra onde está o erro.
		echo "Óh, deu algum erro na conexão.";

	}

	else {

		echo "Tá mara! Tá tudo supimpa.";
	}
*/


