<?php 
session_start();
require_once "plantilla.html";
startblock('article');

require 'php/persona.php';



?>

    <h1>Calculadora IMC:</h1>
    <form method="post" action="php/proceso.php">
        <label> Altura:</label>
        <input type="number" step="any" name="altura" required>
        <label>Peso:</label>
        <input type="number" step="any" name="peso" required>
        <label>Edad:</label>
        <input type="number" name="edad" required>
        <button type="submit" name="registro" value="1">Enviar</button>
        <a href="vaciar.php">Eliminar todos los datos</a>
    </form>
<?php  endblock();?>