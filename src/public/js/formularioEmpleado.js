const formularioEmpleado = {
      I :getId('formularioNuevoEmpleado'),
      cabecera:getId('cabeceraFormulario'),
      titulo:getId('titulo_formulario'),
      descripcion:getId('descripcion_formulario'),
      botonGuardar:document.createElement('button'),
      botonActualizar:document.createElement('button'),
      botonCancelar:getId('btn_cancelar'),
      nombre:getId('nombre'),
      apellidos:getId('apellidos'),
      dni:getId('dni'),
      telefono:getId('telefono'),
      correo:getId('correo'),
      cargo:getId('cargo'),
      contenedor_botones:getId('contenedor_botones'),
      sombra:getId('sombra'),
      direccionInsertar:getId('formularioNuevoEmpleado').dataset.insertar,
      direccionActualizar:getId('formularioNuevoEmpleado').dataset.actualizar
}

formularioEmpleado.I.dataset.insertar="";
formularioEmpleado.I.dataset.actualizar="";
 
formularioEmpleado.botonGuardar.setAttribute('class', 'btn btn_guardar');
formularioEmpleado.botonGuardar.setAttribute('name', 'id');
formularioEmpleado.botonGuardar.innerHTML = 'Guardar';

formularioEmpleado.botonActualizar.setAttribute('class', 'btn btn_actualizar');
formularioEmpleado.botonActualizar.setAttribute('name', 'id');
formularioEmpleado.botonActualizar.innerHTML = 'Actualizar';

function mostrarFormularioEmpleado(){
  formularioEmpleado.sombra.style.display ='grid';
}
function ocultarFormularioEmpleado(){
    formularioEmpleado.I.reset();
    formularioEmpleado.sombra.style.display ='none';
}

function formularioEmpleado_AplicarEstilosActualizarEmpleado(idEmpleado){
      formularioEmpleado.cabecera.style.background = 'rgb(34 138 0)';
      formularioEmpleado.titulo.innerHTML = 'Actualizar Empleado';
      formularioEmpleado.descripcion.innerHTML='Para actualizar nuevo empleado existente a la lista complete el formulario siguiente con los datos a actualizar del empleado y luego precione en guardar, caso contrario presionar el boton cancelar. ';
      formularioEmpleado.I.setAttribute('action',formularioEmpleado.direccionActualizar);
      formularioEmpleado.contenedor_botones.insertBefore(formularioEmpleado.botonActualizar,formularioEmpleado.botonCancelar,);
      formularioEmpleado.contenedor_botones.insertBefore(formularioEmpleado.botonGuardar,formularioEmpleado.botonCancelar);
      formularioEmpleado.botonActualizar.setAttribute('value',idEmpleado);
      formularioEmpleado.contenedor_botones.removeChild(formularioEmpleado.botonGuardar);
      mostrarFormularioEmpleado();
}
function formularioEmpleado_AplicarEstilosNuevoEmpleado(){
      formularioEmpleado.cabecera.style.background = '#1064CF';
      formularioEmpleado.titulo.innerHTML = 'Nuevo Empleado';
      formularioEmpleado.descripcion.innerHTML='Para crear y añadir un nuevo empleado a la lista complete el formulario siguiente con los datos del empleado y luego precione en guardar, caso contrario presionar el boton cancelar. ';

      formularioEmpleado.I.setAttribute('action',formularioEmpleado.direccionInsertar);
      formularioEmpleado.contenedor_botones.insertBefore(formularioEmpleado.botonActualizar,formularioEmpleado.botonCancelar,);
      formularioEmpleado.contenedor_botones.insertBefore(formularioEmpleado.botonGuardar,formularioEmpleado.botonCancelar);
      formularioEmpleado.botonGuardar.setAttribute('value','default')
      formularioEmpleado.contenedor_botones.removeChild(formularioEmpleado.botonActualizar);

      mostrarFormularioEmpleado();
}

    formularioEmpleado.botonCancelar.addEventListener('click', (e)=>{
      e.preventDefault();
      ocultarFormularioEmpleado();
    })


formularioEmpleado.telefono.addEventListener('keydown',function(e){
 var key = window.event ? e.which : e.keyCode;

  if ((key < 48 || key > 57) && key!=8 && key!=9 && key!=13) {
      e.preventDefault();
  }
})

formularioEmpleado.dni.addEventListener('keydown',function(e){
var key = window.event ? e.which : e.keyCode;
 if ((key < 48 || key > 57) && key!=8 && key!=9 && key!=13) {
     e.preventDefault();
 }
 })