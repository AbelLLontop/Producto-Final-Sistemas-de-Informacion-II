<table id="tabla" class="tabla">
    <thead id="thead" >
        <tr class="cabecera"> 
             <th></th>
             <th>Codigo</th>
              <th>Nombre</th>           
              <th>Precio</th>
              <th>Stock</th>
             <th>Categoria</th>
            <th style="display:none;">Descripcion</th>          
             <th style="display:none;">Imagen</th> 
            <th></th>
        </tr> 
    </thead>
  <tbody id="tbody">

    <?php foreach ($this->productos as $producto) { ?>
            
            <tr id="fila-<?= $producto->getId() ?>">
            
            <td>
              <button data-id="<?= $producto->getId() ?>"  class="btn btn_editar">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>editar
              </button>
            </td>
            
            <td class="id"><?= $producto->getId() ?></td>
             <td class="fila_nombre"><?= $producto->getNombre() ?></td>
            <td class="fila_precio"><?= $producto->getPrecio() ?></td>
            <td class="fila_stock"><?= $producto->getStock() ?></td>
                        <td class="fila_categoria"><?= $producto->getCategoria() ?></td>

            <td class="fila_descripcion" style="display:none;"><?= $producto->getDescripcion() ?></td>
           
          
            <td style="display:none;"><img class="fila_imagen" style="width:60px;height:80px;object-fit: cover;" src="<?= $producto->getImagen() ?>"></td>
 
            <td >
            <div class="inline">
            <button  data-id="<?= $producto->getId() ?>" class="btn btn_eliminar">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M14,8c0-2.21-1.79-4-4-4S6,5.79,6,8s1.79,4,4,4S14,10.21,14,8z M17,10v2h6v-2H17z M2,18v2h16v-2c0-2.66-5.33-4-8-4 S2,15.34,2,18z"/></g></svg>
            eliminar</button>         
                
            </div>
            </td></tr>
        <?php } ?>

    </tbody>
</table>


 