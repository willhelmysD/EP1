
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
<form action="" method="">
    <label>Nombre</label>
    <input name="" id="name">

    <label>Apellido</label>
    <input name="" id="last">    
    <button type="button" onclick="test()">Guardar</button>
</form>


<script>
    function test(){
        var name = $('#name').val();

        if(name==""){
            alert("se requiere el campo!"); 
        }
        
    }
</script>
<?php endblock() ?>