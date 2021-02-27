<div style="display: none;" class="sombraTotal" id="formularioAgregar">

   <div class="contenedorFormualrioNuevo">
        <header>
            <h4>Nuevo Empleado</h4>
            <p>Para crear y añadir un nuevo empleado a la lista complete el formulario siguiente con los datos del empleado y luego precione en guardar, caso contrario presionar el boton cancelar. </p>
        </header>
<form class="formulario" method="post" action=<?= $this->direccionCrear ?>>
 
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
                    name="telefono">
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
        <button class="btn btn_guardar" >Guardar</button>
        <div class="btn btn_cancelar">Cancelar</div>
    </div>
</form>
    </div>

</div>

 
