<?php 
require_once "plantilla.html";
startblock('article');
?>
<nav aria-label="breadcrumb">
    <h1 class="text-muted">Usuarios</h1>
    <h6>Usuario: <?php echo $user?></h6>
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
        <li class="breadcrumb-item"><a href="#">Parcial</a></li>
        <li class="breadcrumb-item"><a href="index.php">Usuarios</a></li>
    </ol>
</nav> 
<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <h5>Lista Usuarios</h>
                <h6># <?php echo count($users)?></h6>
                <?php 
                    $cont = 0;
                    foreach($users as $fila){
                        $cont++;
                        echo $cont." ".$fila->getResumen()."<br>";
                    }
                ?>
            </div>
        </div>
    </div>    
</div>
<?php  endblock();?>