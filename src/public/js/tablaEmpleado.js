const tablaEmpleado = {
	I:getId('tablaEmpleados'),
	botonesEliminar:document.querySelectorAll('.btn_eliminar'),
	botonesEditar:document.querySelectorAll('.btn_editar'),
	cabecera:getId('thead'), 
	cuerpo:getId('tbody'), 
	mensajeTablaVacia:getId('mensajetablaVacia')
}

if(tablaEmpleado.cuerpo.childElementCount==0){
	tablaEmpleado.mensajeTablaVacia.style.display='flex';
}else{
	tablaEmpleado.mensajeTablaVacia.style.display='none';
}