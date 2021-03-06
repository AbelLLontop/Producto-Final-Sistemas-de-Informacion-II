

class FormularioEliminar extends Formulario{
    constructor(contenedor){
        super(contenedor);
    }
    mostrar(id){
        this.formulario.querySelector('[name=id]').value = id;
        super.mostrar();
    }
}

class FormularioEditar extends Formulario{
    constructor(contenedor){
        super(contenedor);
    }
    mostrar(id){
        this.formulario.querySelector('[name=id]').value = id;
        super.mostrar();
    }
}






const formularioEliminar = new FormularioEliminar('formularioEliminar');
formularioEliminar.btnCancelar.addEventListener('click',function(){
    formularioEliminar.ocultar();
})

const formularioEditar = new FormularioEditar('formularioEditar');
formularioEditar.btnCancelar.addEventListener('click',function(){
    formularioEditar.ocultar();
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
        let id = boton.dataset.id;
        formularioEditar.mostrar(id);
    }
}





const tabla = new Tabla('tabla');

tabla.addBotones(new BotonesEliminar());
tabla.addBotones(new BotonesEditar());
tabla.actualizar();






