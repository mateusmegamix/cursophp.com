<?php
$senha = "123456";
$senha_db = "Senha inválida $ 2y $ 10 $ eD8TA4uOEK4Y5HVwEfxWBe07ub6a.dEVoa8TLninOKxG9hsVn2CI2";

if(password_verify($senha, $senha_db)):
	echo "Senha válida <br>";
else:
	echo "Senha inválida <br>";
	endif;


/*
$options = [
'cost' => 10,];
*/

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura."<br>";
?>