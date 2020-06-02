<html>
<body>

<?php
	/*Validações
	Funções (filter_input - filter_var)
	FILTER_VALIDATE_INT
	FILTER_VALIDATE_EMAIL
	FILTER_VALIDATE_FLOAT
	FILTER_VALIDATE_IP
	FILTER_VALIDATE_URL
	*/
?>

<?php
if(isset($_POST['enviarformulario'])):
	//Array de erros
	$erros = array();

	//Validações
	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro";
	endif;

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Email inválido";
	endif;

	if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso precisa ser float";
	endif;

	if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
		$erros[] = "IP inválido";
	endif;


	if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
		$erros[] = "URL inválido";
	endif;

	//Exibindo mensagens
	if(!empty($erros)):
		foreach($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Nome: <input type="text" name="nome"><br><br>
	Idade: <input type="text" name="idade"><br><br>
	Email: <input type="email" name="email"><br><br>
	Peso: <input type="text" name="peso"><br><br>
	IP: <input type="text" name="ip"><br><br>
	URL: <input type="text" name="url"><br><br>
	<button type="submit" name="enviarformulario">Enviar</button>
</body>
</html>