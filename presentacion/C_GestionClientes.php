 <?php

include_once RUTA_HELPER.'L_POST.php';
include_once RUTA_HELPER.'JSON.php'; 
include_once RUTA_LOGICA.'LogicaCliente.php';

class C_GestionClientes extends Controlador {

    function __construct() {
        parent::__construct();
        $this->listDatosCliente = ['id', 'nombres', 'apellidos','direccion', 'telefono', 'correo', 'dni'];
        $this->datosPost = $this->obtenerDatosPost($this->listDatosCliente);
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
        if ($this->datosPost) {
            $cliente = new Cliente($this->datosPost);
            if ($this->logica->crearCliente($cliente)) { 
                $this->volver('GestionClientes');
            } else {
                echo "error al insertar";
            }
        } else {
            echo "error al validar los datos";
        }
    }

    public function updateCliente(): void {
        if ($this->datosPost) {
            $cliente = new Cliente($this->datosPost);
            if ($this->logica->actualizarCliente($cliente)) {
                $this->volver('GestionClientes');
            } else {
                echo "Error al insertar Empleado";
            }
        } else {
            echo "Error al validar";
        }
    }

    function deleteCliente(): void {
        $id = $this->obtenerDatosPost(['id']);
        if ($id) {
            if ($this->logica->eliminarCliente($id)) {
                $this->volver('GestionClientes');
            } else {
                echo "error al eliminar Empleado";
            }
        } else {
            echo "error al validar el id";
        }
    }



}
?> 
