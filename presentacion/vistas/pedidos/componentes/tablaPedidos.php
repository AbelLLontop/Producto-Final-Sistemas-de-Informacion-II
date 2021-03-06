<table id="tabla">
    <thead>
    <th>NombreCliente</th>
    <th>dni</th>
    <th>Estado</th> 
    <th>FechaPedido</th>
    <th>FechaEntrega</th>
    <th>Opciones</th>

</thead>
<tbody>
    <?php if (!isset($this->detallesPedido)) { ?> 
        <?php foreach ($this->pedidos as $pedido) { ?>
            <tr>
                <td><?= $pedido->getCliente()->getNombres() ?></td>
                <td><?= $pedido->getCliente()->getDni() ?></td>
                <td><?= $pedido->getEstado() ?></td>
                <td><?= $pedido->getFechaPedido() ?></td>
                <td><?= $pedido->getFechaEntrega() ?></td>
                <td>
                    <div class="inline">
                        <a href=<?= Importar::direccion("GestionPedidos/detalles/" . $pedido->getId()) ?> class="btn btn_detalles">Detalles</a>
                        <button  data-id="<?= $pedido->getId() ?>" class="btn btn_eliminar">eliminar</button>  
                    </div>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td><?= $this->pedido->getCliente()->getNombres() ?></td>
            <td><?= $this->pedido->getCliente()->getDni() ?></td>
            <td><?= $this->pedido->getEstado() ?></td>
            <td><?= $this->pedido->getFechaPedido() ?></td>
            <td><?= $this->pedido->getFechaEntrega() ?></td>
            <td>
                <div class="inline">
                    <button  data-id="<?= $this->pedido->getId() ?>" class="btn btn_eliminar">eliminar</button>  
                        <button style="background:orange;"  data-id="<?= $this->pedido->getId() ?>"  class="btn btn_editar">
            Cambiar Estado
            </button>
                <?php
                if($this->pedido->getEstado()==1){ ?>
                                    <button  data-id="<?= $this->pedido->getId() ?>" class="btn btn_cambiarrepartidor">repartidor</button>  
        
                <?php } ?>

                </div>

            </td>
        </tr>
    <?php } ?>
</tbody>
</table>