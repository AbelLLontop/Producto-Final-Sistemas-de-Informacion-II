<?php

include_once RUTA_HELPER . 'L_POST.php';
include_once RUTA_HELPER . 'JSON.php';
include_once RUTA_LOGICA . 'LogicaCliente.php';

class C_GestionClientes extends Controlador {

    function __construct() {
        parent::__construct();
        $this->listDatosCliente = ['id', 'nombres', 'apellidos', 'direccion', 'telefono', 'correo', 'dni'];
        $this->logica = new LogicaCliente();
    }

    function render() {
        $this->vista->clientes = $this->logica->listarClientes();
        $this->vista->direccionEliminar = Importar::direccion('GestionClientes/eliminarCliente');
        $this->vista->direccionEditar = Importar::direccion('GestionClientes/actualizarCliente');
        $this->vista->direccionCrear = Importar::direccion('GestionClientes/crearCliente');
        $this->vista->render('clientes/index');
    }

    public function createCliente(): void {
        $this->datosPost = $this->obtenerDatosPost($this->listDatosCliente);
            $cliente = new Cliente();
            $cliente->setNombres($this->datosPost['nombres']);
            $cliente->setApellidos($this->datosPost['apellidos']);
            $cliente->setDireccion($this->datosPost['direccion']);
            $cliente->setTelefono($this->datosPost['telefono']);
            $cliente->setCorreo($this->datosPost['correo']);
            $cliente->setDni($this->datosPost['dni']);
            if ($this->logica->crearCliente($cliente)) {
                $this->volver('GestionClientes');
            } else {
                ERROR::mensaje("error al insertar");
            }
         
    }

    public function updateCliente(): void {
        $this->datosPost = $this->obtenerDatosPost($this->listDatosCliente);

            $cliente = new Cliente();
            $cliente->setId($this->datosPost['id']);
            $cliente->setNombres($this->datosPost['nombres']);
            $cliente->setApellidos($this->datosPost['apellidos']);
            $cliente->setDireccion($this->datosPost['direccion']);
            $cliente->setTelefono($this->datosPost['telefono']);
            $cliente->setCorreo($this->datosPost['correo']);
            $cliente->setDni($this->datosPost['dni']);
            if ($this->logica->actualizarCliente($cliente)) {
                $this->volver('GestionClientes');
            } else {
                ERROR::mensaje("error al insertar Empleado");
            }
        
    }

    function deleteCliente(): void {
        $id = $this->obtenerDatosPost(['id']);
            if ($this->logica->eliminarCliente($id)) {
                $this->volver('GestionClientes');
            } else {
               ERROR::mensaje("error al eliminar Empleado");
            }
        
    }
    

}
?> 
