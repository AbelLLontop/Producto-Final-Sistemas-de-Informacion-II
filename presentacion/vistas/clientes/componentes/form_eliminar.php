<div style="display: none;" class="sombraTotal" id="formularioEliminar">

   <div class="contenedorFormualrioNuevo">
        <header>
            <h4>¿Esta seguro de Eliminar?</h4>
            <p>Una vez aceptado no habra marcha atras</p>
        </header>
<form class="formulario" method="post" action=<?= $this->direccionEliminar ?>>
 
  <input type="text" name="id" value="null">

    <div class="contenedor_botonesFormualario">
        <button class="btn btn_guardar" >Eliminar</button>
        <div class="btn btn_cancelar">Cancelar</div>
    </div>
</form>
    </div>

</div>

 
