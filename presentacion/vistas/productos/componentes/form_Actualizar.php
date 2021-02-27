<div style="display: none;" class="sombraTotal" id="formularioActualizar">
    <div class="contenedorFormualrioNuevo">
        <header>
            <h4>Actualizar Producto</h4>
            <p>Para actualizar un producto a la lista complete el formulario siguiente con los datos del empleado y luego precione en guardar, caso contrario presionar el boton cancelar. </p>
        </header>
 

        <form method="post" class="formulario" action=<?= $this->direccionEditar ?> >
 
    <label for="categoria">
        <select required  name="categoria">
            <option value="ZAPATILLAS" >Zapatilla</option>
            <option value="ZAPATOS">Zapatos</option>
            <option value="CAMISAS" >Camisas</option>
            <option value="TERNOS" >Ternos</option>
            <option value="PANTALONES" selected>Pantalones</option>
        </select>
    </label>

    <label for="nombre">Nombre 
        <input  autocomplete="off" 
                maxlength="32"
                required
                placeholder="Ingrese nombre del producto"
                type="text"
                name="nombre"> 
    </label>


    <div class="inline">
        <label for="precio">Precio
            <input  autocomplete="off"
                    maxlength="8"
                    required
                    placeholder="Ingrese el precio del producto"
                    type="text"
                    name="precio">
        </label>
        <label for="stock">Stock
            <input  autocomplete="off"
                    minlength="9"
                    maxlength="9"
                    required
                    placeholder="Ingrese el stock del producto"
                    type="text"
                    name="stock">
        </label>
    </div>

    <label for="descripcion">Descripcion
        <textarea autocomplete="off"
                required
                placeholder="Ingrese la descripcion"
                name="descripcion"></textarea>
    </label>
    <input type="hidden" name="id" value="default">
         <input type="hidden" name="imagen" value="null">
         


    <div class="contenedor_botonesFormualario">
        <button  class="btn btn_actualizar">Actualizar</button>
            <div  class="btn btn_cancelar">Cancelar</div>

    </div>
</form>
    </div>

</div>


