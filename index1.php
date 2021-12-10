<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<title>Projeto - CALCULAR IDADE</title>
</head>

<body bgcolor="#ddd">
	<div style="
		border:2px solid black;
		padding: 30px;
		width:70%;
		margin:0 auto;
		margin-top:8%;
		background-color: rgb(0,0,0, 0.2);
		border-radius:10px;
	">
	
	<div align="center" style="
		color:white;
		font-size:20px;
		font-family:cambria;
		text-shadow:1px 1px 10px blue,
					2px 2px 5px black,
					-1px -1px 5px blue,
					-2px -2px 10px black;
		">PROGRAMA PARA CALCULAR A SUA IDADE<br>Developed by Kelvin Henrique || PHP
	</div>
		
		<?php
			$nome = $_GET{"nome"};
			$ano = $_GET{"ano"};
			$anoHoje = date("Y");
			$calculo = $anoHoje - $ano;
			
			echo
"<div style='
	color:blue;
	font-family:cambria;
	font-size:17px;
	margin-top: 30px;
	margin-left: 15px;
		'>
		
	Olá $nome, seja Bem-Vindo (a) ao meu primeiro sistema em PHP.
		<br>
	Bom... De acordo com as minhas contas, você tem $calculo anos ou irá fazer $calculo anos ainda neste ano!
		<br>
	- Acertei?";
	?>
		
		<br>
		
		<a href="index.html">
			<input type="button" value="Voltar" style="
				border:0px;
				border-radius: 7px;
				width: 250px;
				height: 30px;
				margin-top:15px;
				cursor:pointer;
				background-color:blue;
				color:white;
			"></input>
		</a>
		
</div>

</div>
	
	<div align="center" style="margin-top:15px;font-family:arial black;font-size:15px;color:white;">
		PROJETO FEITO EM PHP  |  Kelvin Henrique  - Todos os direitos reservados
	</div>

</body>

</html>