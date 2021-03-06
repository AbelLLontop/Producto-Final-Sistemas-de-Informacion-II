
<section class="contenido_general">
    <div class="tabla">
        <h1>Pedidos</h1>

        <?php include_once 'tablaPedidos.php'; ?>
    </div>

    <div class="tabla">
        <h2>Detalle</h2>

        <?php if (isset($this->detallesPedido)) { ?> 
            <div>
                <h3>Estado: <?= $this->pedido->getEstado() ?></h3>
                <h4>Repartidor Encargado: Juanito asdasd</h4>
            </div>
            <?php include_once 'tablaDetalles.php' ?>
            <?php
        } else {
            echo "<h3>Precione en detalles para ver los detalles de algun pedido</h3>";
        }
        ?> 
    </div>
</section> 



