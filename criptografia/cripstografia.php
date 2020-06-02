<?php
$senha = "123456";

$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ". base64_decode($novaSenha);

echo "<hr>";

echo "Md5: ".md5($senha)."<br>";
echo "Sha1: ". sha1($senha);
?>