<?php
    if(isset($_POST['enviar-formularios'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");            
        $pasta = "arquivos/";
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;      

        while ($contador < $quantidadeArquivos):

                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
                if(in_array($extensao, $formatosPermitidos)):
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";
                    if(move_uploaded_file($temporario, $pasta.$novoNome)):
                        echo "Upload feito com sucesso para $pasta$novoNome <br/>";                        
                    else:
                        echo "Erro ao enviar o arquivo $temporario <br/>";                        
                    endif;                   
                    else:
                        echo "A extensão $extensao não é permitida. <br/>";                    
                endif;
        $contador++;
        endwhile;
    endif;    
?>

<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"
        enctype="multipart/form-data">

        <input type="file" name="arquivo[]" multiple><br><br>
        <input type="submit" name="enviar-formularios">
    </body>
</html>


