<table id="tabla" class="tabla">
    <thead id="thead" >
        <tr class="cabecera">
            <th>Dni</th>
            <th>Nombre</th> 
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
            <th>direccion</th>
            <th>Opciones</th>
        </tr>
    </thead>
   <tbody id="tbody">

    <?php foreach ($this->clientes as $cliente) { ?>
            <tr id="fila-<?= $cliente->getId() ?>">
            <td class="fila_dni"><?= $cliente->getDni() ?></td>
            <td class="fila_nombres"><?= $cliente->getNombres() ?></td>
            <td class="fila_apellidos"><?= $cliente->getApellidos() ?></td>
            <td class="fila_telefono"><?= $cliente->getTelefono() ?></td>
            <td class="fila_correo"><?= $cliente->getCorreo() ?></td>
            <td class="fila_direccion"><?= $cliente->getDireccion() ?></td>
            <td >
            <div class="inline">
            <button   data-id="<?= $cliente->getId() ?>"  class="btn btn_editar">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
            editar
            </button>
            <button  data-id="<?= $cliente->getId() ?>" class="btn btn_eliminar">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M14,8c0-2.21-1.79-4-4-4S6,5.79,6,8s1.79,4,4,4S14,10.21,14,8z M17,10v2h6v-2H17z M2,18v2h16v-2c0-2.66-5.33-4-8-4 S2,15.34,2,18z"/></g></svg>
            eliminar</button>
            <a 
            class="btn btn_detalles">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
            DETALLES</a>
            </div>
            </td></tr>
        <?php } ?>

    </tbody>
</table>

