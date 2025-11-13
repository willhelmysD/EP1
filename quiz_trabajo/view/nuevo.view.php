<?php 
require_once "plantilla.html";
startblock('article');
?>
<form method="post" action="?&accion=guardar" id="formulario1">
    <label>Nombre</label>
    <input name="nombre" type="text" id="nombre">
    <label>Apellido</label>
    <input name="apellido" type="text" id="apellido">
    <label>Cargo</label>
    <select name="cargo" id="cargo">
        <option value="Tecnico">Tecnico</option>
        <option value="Tecnologo">Tecnologo</option>
        <option value="Ingeniero">Ingeniero</option>
    </select>
    <label>Horas</label>
    <input name="horas" type="text" id="horas">
    <button type="button" onclick="guardarReporte()">Enivar</button>
</form>

<script>
    function guardarReporte(){
        
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var horas = $('#horas').val();
        var cargo = $('#cargo').val();

        if(nombre==""){
            alert("campos requeridos");
            return false;
        }

        document.formulario1.submit();

        //

    }
</script>

<?php  endblock();?>