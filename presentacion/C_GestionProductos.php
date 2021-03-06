<?php

include_once RUTA_HELPER . 'L_POST.php';
include_once RUTA_HELPER . 'JSON.php';
include_once RUTA_LOGICA . 'LogicaProducto.php';

class C_GestionProductos extends Controlador {

    function __construct() {
        parent::__construct();
        $this->listDatosProducto = ['id', 'stock', 'descripcion', 'nombre', 'precio', 'categoria', 'imagen'];

        $this->direccionEliminar = Importar::direccion('GestionProductos/eliminarProducto');
        $this->direccionEditar = Importar::direccion('GestionProductos/actualizarProducto');
        $this->direccionCrear = Importar::direccion('GestionProductos/crearProducto');        
        $this->logica = new LogicaProducto();
    }

    function render() {
        $this->vista->productos = $this->logica->listarProductos();
        $this->vista->direccionEliminar =  $this->direccionEliminar;
        $this->vista->direccionEditar = $this->direccionEditar;
        $this->vista->direccionCrear =   $this->direccionCrear;
        $this->vista->render('productos/index');
    }

    public function createProducto(): void {
                $this->datosPost = $this->obtenerDatosPost($this->listDatosProducto);

            $producto = new Producto();
            $producto->setCategoria($this->datosPost['categoria']);
            $producto->setDescripcion($this->datosPost['descripcion']);
            $producto->setPrecio($this->datosPost['precio']);
            $producto->setNombre($this->datosPost['nombre']);
            $producto->setImagen($this->datosPost['imagen']);
            $producto->setStock($this->datosPost['stock']);
            
            if ($this->logica->crearProducto($producto)) {
                $this->volver('GestionProductos');
            } else {
               Errores::mensaje("Error en la consulta");
            }
      
    }

    public function updateProducto(): void {
        $this->datosPost = $this->obtenerDatosPost($this->listDatosProducto);
            $producto = new Producto();
           
            $producto->setId($this->datosPost['id']);            
            $producto->setCategoria($this->datosPost['categoria']);
            $producto->setDescripcion($this->datosPost['descripcion']);
            $producto->setPrecio($this->datosPost['precio']);
            $producto->setNombre($this->datosPost['nombre']);
            $producto->setImagen($this->datosPost['imagen']);
            $producto->setStock($this->datosPost['stock']);
            
            if ($this->logica->actualizarProducto($producto)) {
                $this->volver('GestionProductos');
            } else {
                 Errores::mensaje("Error en la consulta");
            }
       
    }

    function deleteProducto(): void {
        $id = $this->obtenerDatosPost(['id']);
            if ($this->logica->eliminarProducto($id)) {
                $this->volver('GestionProductos');
            } else {
                 Errores::mensaje("Error en la consulta");
            }
        
    }
    

}

?>