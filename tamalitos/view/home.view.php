<?php 
include_once 'plantilla.html';
startblock('article') ?>
<h1>home</h1>
<a href="index.php?url=index&accion=logout">salir</a>
<?php
$user = $this->perfil->getNick();
//$u = new Usuario();

echo "Bienvenido usuario: $user <br>";
echo "Total de usuarios: ".count($lista);
?>
//var_dump($_SESSION);
<?php endblock() ?>