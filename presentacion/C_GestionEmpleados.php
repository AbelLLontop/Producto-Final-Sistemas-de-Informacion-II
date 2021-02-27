<?php

include_once RUTA_HELPER.'L_POST.php';
include_once RUTA_HELPER.'JSON.php'; 
include_once RUTA_LOGICA.'LogicaEmpleado.php';

class C_GestionEmpleados extends Controlador {

    function __construct() {
        parent::__construct();
        $this->listDatosEmpleado = ['id', 'nombres', 'apellidos', 'telefono', 'correo', 'cargo', 'dni'];
        $this->datosPost = $this->obtenerDatosPost($this->listDatosEmpleado);
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
        if ($this->datosPost) {
            $empleado = new Empleado($this->datosPost);
            if ($this->logica->crearEmpleado($empleado)) { 
                $this->volver('GestionEmpleados');
            } else {
                echo "error al insertar";
            }
        } else {
            echo "error al validar los datos";
        }
    }

    public function updateEmpleado(): void {
        if ($this->datosPost) {
            $empleado = new Empleado($this->datosPost);
            if ($this->logica->actualizarEmpleado($empleado)) {
                $this->volver('GestionEmpleados');
            } else {
                echo "Error al insertar Empleado";
            }
        } else {
            echo "Error al validar";
        }
    }

    function deleteEmpleado(): void {
        $id = $this->obtenerDatosPost(['id']);
        if ($id) {
            if ($this->logica->eliminarEmpleado($id)) {
                $this->volver('GestionEmpleados');
            } else {
                echo "error al eliminar Empleado";
            }
        } else {
            echo "error al validar el id";
        }
    }


}
?> 
