<?php 
session_start();
require_once "plantilla.html";
startblock('article');
if (isset($_SESSION['registro'])) {
require 'php/persona.php';
    $detalle = unserialize($_SESSION['registro']);

    
}
?>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php 
                    $sumaEdades = 0;
    $promEdad = 0;
    $sumaIMC = 0;
    $promIMC = 0;
    foreach ($detalle as $fila) {
        $sumaEdades = $sumaEdades + $fila->getEdad();
        $promEdad = $sumaEdades / count($detalle);

        $sumaIMC = $sumaIMC + $fila->calcularIMC();
        $promIMC = $sumaIMC / count($detalle);
    
        echo $fila->mostrarDatos();
        echo "<br>";
        echo "Su IMC es de: " . $fila->calcularIMC();
        echo "<br>";
        echo "Usted se encuentra en la categoría de " . $fila->categoriaIMC();
        echo "<br>";
    }
    echo "/////////////////////////////////////////////////";
    echo "<br>";
    echo "El promedio de edades de los usuarios es de: " . $promEdad;
    echo "<br>";
    echo "El promedio de IMC de los usuarios es de: " . $promIMC;
    echo "<br>";
                    
                    ?>
                </div>

            </div>
        </div>

    </div>

<?php  endblock();?>