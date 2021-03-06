

class FormularioEditar extends Formulario{
    constructor(contenedor){
        super(contenedor);
    }
    mostrar(datos){
        this.formulario.querySelector('[name=direccion]').value = datos.direccion;
        this.formulario.querySelector('[name=nombres]').value = datos.nombres;
        this.formulario.querySelector('[name=apellidos]').value = datos.apellidos;
        this.formulario.querySelector('[name=dni]').value = datos.dni;
        this.formulario.querySelector('[name=telefono]').value = datos.telefono;
        this.formulario.querySelector('[name=id]').value = datos.id;
        this.formulario.querySelector('[name=correo]').value = datos.correo;
        super.mostrar();
    }
}

 
class FormularioEliminar extends Formulario{
    constructor(contenedor){
        super(contenedor);
    }
    mostrar(id){
        this.formulario.querySelector('[name=id]').value = id;
        super.mostrar();
    }
}





const formularioAgregar = new Formulario('formularioAgregar');

formularioAgregar.btnCancelar.addEventListener('click',function(){
    formularioAgregar.ocultar();
})



const formularioActualizar = new FormularioEditar('formularioActualizar');
formularioActualizar.btnCancelar.addEventListener('click',function(){
    formularioActualizar.ocultar();
})

const formularioEliminar = new FormularioEliminar('formularioEliminar');
formularioEliminar.btnCancelar.addEventListener('click',function(){
    formularioEliminar.ocultar();
})




 

const btnAgregar = document.getElementById('btn_agregarNuevoEmpleado');

btnAgregar.addEventListener('click', function(){
 formularioAgregar.mostrar();
})







class BotonesEliminar extends Boton{    

  constructor(){ 
        super('.btn_eliminar');
    }     
    clickAccion(boton){
        let id = boton.dataset.id;
        formularioEliminar.mostrar(id);
    }
}


class BotonesEditar extends Boton{    

  constructor(){ 
        super('.btn_editar');
    }     
    clickAccion(boton){
        const id = boton.dataset.id;
        const fila = this.table.querySelector(`#fila-${id}`);             
        const empleado = {
            id: id,
            nombres: fila.querySelector('.fila_nombres').innerHTML,
            apellidos: fila.querySelector('.fila_apellidos').innerHTML,
            dni: fila.querySelector('.fila_dni').innerHTML,
            telefono: fila.querySelector('.fila_telefono').innerHTML,
            correo: fila.querySelector('.fila_correo').innerHTML,
            direccion: fila.querySelector('.fila_direccion').innerHTML
        }
        formularioActualizar.mostrar(empleado);

    }
}







const tabla = new Tabla('tabla');

tabla.addBotones(new BotonesEliminar());
tabla.addBotones(new BotonesEditar());
tabla.actualizar();













