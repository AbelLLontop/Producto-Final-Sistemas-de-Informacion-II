<?php
 
include_once RUTA_HELPER.'L_POST.php';
include_once RUTA_HELPER.'JSON.php';
include_once RUTA_LOGICA.'LogicaProducto.php';
 
class C_GestionProductos extends Controlador {  
    
    function __construct() {
        parent::__construct(); 
        $this->listDatosProducto = ['id', 'stock', 'descripcion', 'nombre', 'precio', 'categoria','imagen'];
        $this->datosPost = $this->obtenerDatosPost($this->listDatosProducto);
        $this->logica = new LogicaProducto();
    }
 
    function render() { 
        $this->vista->productos = $this->logica->listarProductos();
        $this->vista->direccionEliminar = Importar::direccion('GestionProductos/eliminarProducto');
        $this->vista->direccionEditar = Importar::direccion('GestionProductos/actualizarProducto');
        $this->vista->direccionCrear = Importar::direccion('GestionProductos/crearProducto');
        $this->vista->render('productos/index');

    } 
 

    public function createProducto(): void {        
        if ($this->datosPost) {
            $producto = new Producto($this->datosPost);

         if ($this->logica->crearProducto($producto)) {
            $this->volver('GestionProductos');
         } else {
            echo "error al insertar";
        }
    } else {
        echo "error al validar los datos";
    }
}

public function updateProducto(): void {       
    if ($this->datosPost) {
        $producto = new Producto($this->datosPost);
        if($this->logica->actualizarProducto($producto)){
            $this->volver('GestionProductos');
      }else{
        echo "Error al insertar Producto";
    }
} else {
    echo "Error al validar";
}
} 



function deleteProducto(): void {
    $id = $this->obtenerDatosPost(['id']);
    if ($id) {
        if ($this->logica->eliminarProducto($id)) {
            $this->volver('GestionProductos');
        } else {
            echo "error al eliminar Producto";
        }
    } else {
        echo "error al validar el id";
    }
}



}

?>