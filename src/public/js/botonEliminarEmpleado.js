tablaEmpleado.botonesEliminar.forEach((botonEliminar)=>{
    botonEliminar.addEventListener('click',function(e){
      const datos = new FormData();
      datos.append("id",botonEliminar.dataset.id);
         var url =botonEliminar.dataset.url;
      if(confirm("¿Esta seguro de eliminar el Empleado Seleccionado?")){
      fetch(url,{
        method:'post',
        body:datos
      })
      .then(res=>res.json())
      .then(data=>{
        if(data.estado){
        const fila = document.querySelector(`#fila-${data.id}`);
           tablaEmpleado.cuerpo.removeChild(fila);
           if(tablaEmpleado.cuerpo.childElementCount==0){
            tablaEmpleado.mensajeTablaVacia.style.display='flex';
              }
        }
      })}
    })
}) 