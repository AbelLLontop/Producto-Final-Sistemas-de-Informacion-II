<table>
    <thead>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>PrecioUnitario</th>
    <th>Cantidad</th>
</thead>
<tbody>

    <?php foreach ($this->detallesPedido->getItems() as $item) { ?>
        <tr>
            <td><?= $item->getProducto()->getId() ?></td>
            <td><?= $item->getProducto()->getNombre() ?></td>
            <td><?= $item->getProducto()->getPrecio() ?></td>
            <td><?= $item->getCantidad() ?></td>
        </tr>

    <?php } ?>
    <tr>
        <td colspan="3"><h4>Precio Total</h4></td>
        <td colspan="1">320</td>
    </tr>
</tbody>
</table>