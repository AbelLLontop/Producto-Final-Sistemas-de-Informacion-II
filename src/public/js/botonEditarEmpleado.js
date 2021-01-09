 tablaEmpleado.botonesEditar.forEach((botonEditar)=>{
      botonEditar.addEventListener('click',function(){
      const idEmpleado = this.dataset.id;
      const fila = document.querySelector(`#fila-${idEmpleado}`);
      
            formularioEmpleado.nombre.value = fila.querySelector('.fila_nombre').innerHTML;
            formularioEmpleado.apellidos.value =fila.querySelector('.fila_apellidos').innerHTML;
            formularioEmpleado.dni.value =fila.querySelector('.fila_dni').innerHTML;
            formularioEmpleado.telefono.value = fila.querySelector('.fila_telefono').innerHTML;
            formularioEmpleado.correo.value =fila.querySelector('.fila_correo').innerHTML;
            formularioEmpleado.cargo.value =fila.querySelector('.fila_cargo').innerHTML;
    
    formularioEmpleado_AplicarEstilosActualizarEmpleado(idEmpleado);

    })
});



