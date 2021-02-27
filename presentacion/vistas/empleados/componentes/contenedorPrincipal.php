<section class="contenido_general">
    
    <div class="contenedorTabla">
      <div class="inline">
        <button id="btn_agregarNuevoEmpleado" class="btn btn_agregar"><?= Importar::SVG('persona_mas') ?>Agregar</button>
    </div>
        <?php include_once 'tabla.php'; ?>
        <?php if(count($this->empleados)<1){ ?>
        <div id="mensajetablaVacia" class="mensajetablaVacia"><div>Tabla vacia</div></div>
        <?php } ?>
    </div>
  
</section> 



   