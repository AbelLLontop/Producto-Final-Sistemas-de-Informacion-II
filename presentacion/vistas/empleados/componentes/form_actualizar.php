<div style="display: none;" class="sombraTotal" id="formularioActualizar">
    <div class="contenedorFormualrioNuevo">
        <header>
            <h4>Actualizar Empleado</h4>
            <p>Para cambiar y actualizar un nuevo empleado, complete el formulario siguiente con los datos correspondientes y luego precione en actualizar, caso contrario presionar el boton cancelar. </p>
        </header>
        <form method="post" class="formulario" action=<?= $this->direccionEditar ?> >

            <label for="cargo">
                <select required  name="cargo">
                    <option value="Administrador" >administrador</option>
                    <option value="Despachador">Despachador</option>
                    <option value="Repartidor" selected>Repartidor</option>
                </select>
            </label>

            <label for="nombres">Nombre 
                <input  autocomplete="off"
                maxlength="32"
                required 
                placeholder="Ingrese su nombre"
                type="text" 
                name="nombres">
            </label>


            <label for="apellidos">Apellidos
                <input  autocomplete="off"
                maxlength="60"
                required 
                placeholder="Ingrese sus apellidos"
                type="text"
                name="apellidos">
            </label>

            <div class="inline">
                <label for="dni">DNI 
                    <input  autocomplete="off"
                    minlength="8"
                    maxlength="8"
                    required
                    placeholder="Ingrese su DNI"
                    type="text"
                    name="dni">
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
                name="correo">
            </label>

            <input type="hidden" name="id" value="default">

            <div class="contenedor_botonesFormualario">
                <button  class="btn btn_actualizar">Actualizar</button>
                <div  class="btn btn_cancelar">Cancelar</div>
            </div>
        </form>
    </div>

</div>


