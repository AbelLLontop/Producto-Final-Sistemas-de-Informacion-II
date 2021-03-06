<div style="display: none;" class="sombraTotal" id="formularioEditar">

    <div class="contenedorFormualrioNuevo">
        <header>
            <h4>Cambiar Estado</h4>
        </header>
        <form class="formulario" method="post" action=<?= $this->direccionEditar ?> >

            <input type="text" name="id" value="null">
            <select name="estado">
                <option value="1">En Proceso</option>
                <option value="2">Cancelado</option>
                <option value="3">Finalizado</option>
                 
            </select>

            <div class="contenedor_botonesFormualario">
                <button class="btn btn_guardar" >Guardar Cambios</button>
                <div class="btn btn_cancelar">Cancelar</div>
            </div>
        </form> 
    </div>

</div> 

