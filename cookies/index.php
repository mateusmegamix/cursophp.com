<?php
//cookies
setcookie('user', 'Mateus Pereira', time()+3600);
setcookie('email', 'mateus_megamix@hotmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);