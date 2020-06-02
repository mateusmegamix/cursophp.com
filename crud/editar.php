<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
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
    <h3 class="light">Editar Cliente</h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class="input-field">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
        <label for="nome">Nome</label>
      </div>
      <div class="input-field">
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
        <label for="sobrenome">Sobrenome</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
        <label for="email">Email</label>
      </div>
      <div class="input-field">
        <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
        <label for="idade">Idade</label>
      </div>

      <button type="submit" name="btn-editar" class="btn green waves-effect">Atualizar</button>
      <a href="index.php" type="submit" class="btn waves-effect">Lista de clientes</a>
    </form>
  </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>