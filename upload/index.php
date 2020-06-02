<?php

    if(isset($_POST['enviar-formularios'])) {
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)) {
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)) {
                echo "Upload feito com Sucesso!";
            } else {
                echo "Eroo ao enviar!";
            }
        } else {
            echo "Formato Inválido!";
        }
    }
?>

<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"
        enctype="multipart/form-data">

        <input type="file" name="arquivo"><br><br>
        <input type="submit" name="enviar-formularios">
    </body>
</html>