<section class="contenido_general">
    <div class="contenedor">
            <form class="detalles" method="post" class="formulario" action=<?= $this->direccionEditar ?>>
            <div>Categoria:
                <select class="estilo_form_detalle" id="detalles_categoria" required name="categoria">
                    <option value="ZAPATILLAS" >Zapatilla</option>
                    <option value="ZAPATOS">Zapatos</option>
                    <option value="CAMISAS" >Camisas</option>
                    <option value="TERNOS" >Ternos</option>
                    <option value="PANTALONES" selected>Pantalones</option>
                </select>
            </div>

             <div><input required class="estilo_form_detalle" id="detalles_imagen" type="text" name="imagen" value="null"></div>

            <div class="estilo_form_detalle img_detalles"><img id="imagen"  alt=""></div>
            
            <div><input required  name="nombre" class="estilo_form_detalle"  id="detalles_nombre" type="text" value="" placeholder="Nombre del producto"></div>
            
            <div>S/.<input required name="precio" placeholder="0" class="estilo_form_detalle" step="any"  type="number" id="detalles_precio" value=""></div>
            
            <div>stock: <input required name="stock" type="number" placeholder="0" class="estilo_form_detalle" value=""  id="detalles_stock"></div>
            <div>Descripción<textarea required name="descripcion" placeholder="Describe el Producto" class="estilo_form_detalle"  id="detalles_descripcion"></textarea></div> 
         
         <div><input required id="id" type="hidden" name="id" value="default">
            <button  class="btn btn_eliminar">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M14,8c0-2.21-1.79-4-4-4S6,5.79,6,8s1.79,4,4,4S14,10.21,14,8z M17,10v2h6v-2H17z M2,18v2h16v-2c0-2.66-5.33-4-8-4 S2,15.34,2,18z"/></g></svg>
            Guardar Cambios</button>    
            
         </div>  
      
        </form>
            <div class="contenedorTabla">
                <div class="inline"><button id="btn_agregarNuevoProducto" class="btn btn_agregar"><?= Importar::SVG('addProduct') ?>Agregar</button></div>
                <?php include_once 'tabla.php'; ?>
                <?php if (count($this->productos) < 1) { ?>
                    <div id="mensajetablaVacia" class="mensajetablaVacia"><div>Tabla vacia</div></div>
                <?php } ?>
            </div> 
        
    
    
     </div>


</section>

<style>
    .estilo_form_detalle{
        border: solid 1px var(--color_bordesTabla) !important;
        padding: 6px;
        background: none;
        color:var(--color_textoCabeceraTabla);
        outline: none;
        border-radius: 0;
        font-size: 1em;  

    }
    #detalles_imagen{
        width: 100%;
    }
 
    #detalles_nombre{
        width: 100%;
        font-size: 1.2em;
    }
    #detalles_descripcion{
        height: 100px;
        width: 100%;
    resize: none;
    }



    option{
        color:black;
        padding: 2px;
    }
    .detalles{ 

        background: var(--color_contenedorTabla);
        padding: 20px;
        color:var(--color_textoCabeceraTabla);
        border-radius:20px;
        display: flex;
        flex-direction: column;
        gap:8px;
    }
    .img_detalles{
        width: 100%;
        padding: 0 40px;
        height: 220px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .img_detalles img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

</style>