 <form  id="formularioNuevoEmpleado"
        method="POST" data-insertar=<?= Importar::direccion('GestionEmpleados/crearEmpleado'); ?>
                    data-actualizar=<?= Importar::direccion('GestionEmpleados/actualizarEmpleado'); ?>
        action="#">

        <select required  name="cargo" id="cargo">
          <option value="Administrador" >administrador</option>
          <option value="Despachador">Despachador</option>
          <option value="Repartidor" selected>Repartidor</option>
        </select>

        <label for="nombre">Nombre
          <input  autocomplete="off"
                  maxlength="32"
                  required
                  placeholder="Ingrese su nombre"
                  type="text"
                  name="nombre"
                  id="nombre">
        </label>

        <label for="apellidos">Apellidos
          <input  autocomplete="off"
                  maxlength="60"
                  required
                  placeholder="Ingrese sus apellidos"
                  type="text"
                  name="apellidos"
                  id="apellidos">
        </label>

      <div class="inline">
        <label for="dni">DNI
          <input  autocomplete="off"
                  minlength="8"
                  maxlength="8"
                  required
                  placeholder="Ingrese su DNI"
                  type="text"
                  name="dni"
                  id="dni">
        </label>
         <label for="telefono">Telefono
          <input  autocomplete="off"
                  minlength="9"
                  maxlength="9"
                  required
                  placeholder="Ingrese su numero de telefono"
                  type="text"
                  name="telefono"
                  id="telefono">
        </label>
      </div>

        <label for="apellidos">Correo
          <input  autocomplete="off"
                  required
                  placeholder="Ingrese su correo"
                  type="email"
                  name="correo"
                  id="correo">
        </label>

        <div class="contenedor_botonesFormualario" id="contenedor_botones">
          <button id="btn_cancelar" class="btn btn_cancelar">Cancelar</button>
        </div>
</form>