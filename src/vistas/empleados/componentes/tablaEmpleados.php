	<table id="tablaEmpleados" class="tabla">
  	<thead id="thead" >
      <tr class="cabecera">
      <th>Dni</th>
  		<th>Nombre</th>
  		<th>Apellidos</th>
  		<th>Telefono</th> 
  		<th>Correo Electronico</th>
  		<th>Cargo</th>
  		<th>Opciones</th>
      </tr>
  	</thead> 
  	<tbody id="tbody">
      <?php 
        foreach($data["empleados"] as $empleado){ ?>
         <tr id="fila-<?= $empleado->getId() ?>">
          <td class="fila_dni"><?= $empleado->getDni() ?></td>
          <td class="fila_nombre"><?= $empleado->getNombre() ?></td>
          <td class="fila_apellidos"><?= $empleado->getApellidos() ?></td>
          <td class="fila_telefono"><?= $empleado->getTelefono() ?></td>
          <td class="fila_correo"><?= $empleado->getCorreo() ?></td>
          <td class="fila_cargo"><?= $empleado->getCargo() ?></td>
         <td >
          <div class="inline">
           <button data-id="<?= $empleado->getId() ?>"  class="btn btn_editar"><?=Importar::SVG('lapiz')?>editar</button>
          <button data-url=<?= Importar::direccion('GestionEmpleados/eliminarEmpleado'); ?>
            data-id="<?= $empleado->getId() ?>" class="btn btn_eliminar"><?=Importar::SVG('persona_menos')?>eliminar</button> 

              <a href=<?= Importar::direccion("GestionEmpleados/detallesEmpleado?dni=".$empleado->getDni()); ?>  
              class="btn btn_detalles"><?=Importar::SVG('lista')?>DETALLES</a> 

          </div>
         </td>
        </tr>
      <?php } ?>
  </tbody>
</table>

