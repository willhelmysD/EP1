<?php 
require_once "plantilla.html";
startblock('article');
?>
<nav aria-label="breadcrumb">
    <h1 class="text-muted">Home</h1>
    <h6>Usuario: <?php echo $user?></h6>
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
        <li class="breadcrumb-item"><a href="#">Parcial</a></li>
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    </ol>
</nav> 

<div class="row">
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5>Usuarios</h>
                <h6># <?php echo count($users)?></h6>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Clientes</h>
                <h6># 0</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Pedidos</h>
                <h6># 0</h6>
            </div>
        </div>
    </div>     
</div>
    

<?php  endblock();?>