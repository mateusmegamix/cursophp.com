<?php
//header
include_once 'includes/header.php';
?>

<?php
if(isset($_POST['enviarformulario'])):
  //Array de erros
  $erros = array();

  //Sanitize
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

  $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
    $erros[] = "Email inválido";
    endif;

  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
  if(!filter_var($idade, FILTER_VALIDATE_INT)):
    $erros[] = "Idade precisa ser inteiro";
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

<div class="row">
  <div class="container">
    <h3 class="light">Novo Cliente</h3>
    <form action="php_action/create.php" method="POST">
      <div class="input-field">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>
      </div>
      <div class="input-field">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome">Sobrenome</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" id="email">
        <label for="email">Email</label>
      </div>
      <div class="input-field">
        <input type="text" name="idade" id="idade">
        <label for="idade">Idade</label>
      </div>

      <button type="submit" name="btn-cadastrar" class="btn green waves-effect">Cadastrar</button>
      <a href="index.php" type="submit" class="btn waves-effect">Lista de clientes</a>
    </form>
  </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>