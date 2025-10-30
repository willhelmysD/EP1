<?php 
require_once "plantilla.html";
startblock('article');
?>
<nav aria-label="breadcrumb">
    <h1 class="text-muted">Pedidos</h1>
    <h6>Usuario: <?php echo $user?></h6>
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
        <li class="breadcrumb-item"><a href="#">Parcial</a></li>
        <li class="breadcrumb-item"><a href="index.php">Pedidos</a></li>
    </ol>
</nav> 
<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <h5>Formulario Pedidos</h>
                <form action="proceso/validar_pedido.php" method="post">
                    <div class="mb-3">
                        <label>Fecha</label>
                        <input name="fecha" type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>cantidad</label>
                        <input name="cantidad" type="text" class="form-control">
                    </div>                    
                    <div class="mb-3">
                        <label>Tipo</label>
                        <input name="tipo" type="text" class="form-control">
                    </div>                    
                    <div class="mb-3">
                        <label>total</label>
                        <input name="total" type="text" class="form-control">
                    </div>                    
                    <div class="mb-3">
                        <label>Celular</label>
                        <input name="celular" type="text" class="form-control">
                    </div>                    
                    <div class="mb-3">
                        <label>direccion</label>
                        <input name="fecha" type="date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success btn-xs">Enviar</button>
                </form>
            </div>
        </div>
    </div>    
</div>
<?php  endblock();?>