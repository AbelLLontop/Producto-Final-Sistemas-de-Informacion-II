<div style="display: none;" class="sombraTotal" id="formularioAgregar">
    <div class="contenedorFormualrioNuevo">
        <header>
            <h4>Agregar</h4>
            <p>Para crear y añadir un nuevo producto a la lista complete el formulario siguiente con los datos del empleado y luego precione en guardar, caso contrario presionar el boton cancelar. </p>
        </header>
 
<form class="formulario" method="post" action=<?= $this->direccionCrear ?>>
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
                    required
                    placeholder="Ingrese el precio del producto"
                    type="text"
                    name="precio">
        </label>
        <label for="stock">Stock
            <input  autocomplete="off"
                    required
                    placeholder="Ingrese el stock del producto"
                    type="text"
                    name="stock">
        </label>
    </div>
  <label for="imagen_">Imagen
           <input id="imagen_" required placeholder="url imagen.png" type="text" name="imagen" value="">
  </label>

    <label for="descripcion">Descripcion
        <textarea autocomplete="off"
                required
                placeholder="Ingrese la descripcion"
                name="descripcion"></textarea>
    </label>
    <input type="hidden" name="id" value="default">



    <div class="contenedor_botonesFormualario">
        <button class="btn btn_guardar" >Guardar</button>
    <div  class="btn btn_cancelar">Cancelar</div>

    </div>
</form>
    </div>

</div>


