<?php

include_once RUTA_HELPER . 'L_POST.php';
include_once RUTA_HELPER . 'JSON.php';
include_once RUTA_LOGICA . 'LogicaEmpleado.php';

class C_GestionEmpleados extends Controlador {

    function __construct() {
        parent::__construct();
        $this->listDatosEmpleado = ['id', 'nombres', 'apellidos', 'telefono', 'correo', 'cargo', 'dni'];
        $this->logica = new LogicaEmpleado();
    }

    function render() {
        $this->vista->empleados = $this->logica->listarEmpleados();
        $this->vista->direccionEliminar = Importar::direccion('GestionEmpleados/eliminarEmpleado');
        $this->vista->direccionEditar = Importar::direccion('GestionEmpleados/actualizarEmpleado');
        $this->vista->direccionCrear = Importar::direccion('GestionEmpleados/crearEmpleado');
        $this->vista->render('empleados/index');
    }

    public function createEmpleado(): void {
        $this->datosPost = $this->obtenerDatosPost($this->listDatosEmpleado);

            $empleado = new Empleado();
            $empleado->setNombres($this->datosPost['nombres']);
            $empleado->setApellidos($this->datosPost['apellidos']);
            $empleado->setTelefono($this->datosPost['telefono']);
            $empleado->setCorreo($this->datosPost['correo']);
            $empleado->setCargo($this->datosPost['cargo']);
            $empleado->setDni($this->datosPost['dni']);

            if ($this->logica->crearEmpleado($empleado)) {
                $this->volver('GestionEmpleados');
            } else {
               Errores::mensaje("Error en la bd");
            }
        
    }

    public function updateEmpleado(): void {
              $this->datosPost = $this->obtenerDatosPost($this->listDatosEmpleado);

            $empleado = new Empleado();
            $empleado->setId($this->datosPost['id']);
            $empleado->setNombres($this->datosPost['nombres']);
            $empleado->setApellidos($this->datosPost['apellidos']);
            $empleado->setTelefono($this->datosPost['telefono']);
            $empleado->setCorreo($this->datosPost['correo']);
            $empleado->setCargo($this->datosPost['cargo']);
            $empleado->setDni($this->datosPost['dni']);
            if ($this->logica->actualizarEmpleado($empleado)) {
                $this->volver('GestionEmpleados');
            } else {
                Errores::mensaje("Error en la consulta");
            }

    }

    function deleteEmpleado(): void {
        $id = $this->obtenerDatosPost(['id']);

            if ($this->logica->eliminarEmpleado($id)) {
                $this->volver('GestionEmpleados');
            } else {
                Errores::mensaje("Error en la consulta");
            }
        
    }
    
}
?> 
