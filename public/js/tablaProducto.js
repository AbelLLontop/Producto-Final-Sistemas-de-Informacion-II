
 
class FormularioEditar extends Formulario{
    constructor(contenedor){
        super(contenedor);
    }
    mostrar(datos){
        this.formulario.querySelector('[name=categoria]').value = datos.categoria;
        this.formulario.querySelector('[name=nombre]').value = datos.nombre;
        this.formulario.querySelector('[name=precio]').value = datos.precio;
        this.formulario.querySelector('[name=stock]').value = datos.stock;
        this.formulario.querySelector('[name=descripcion]').value = datos.descripcion;
        this.formulario.querySelector('[name=id]').value = datos.id;
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


const btnAgregar = document.getElementById('btn_agregarNuevoProducto');

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
        const producto = {
            id: id,
            stock: fila.querySelector('.fila_stock').innerHTML,
            descripcion: fila.querySelector('.fila_descripcion').innerHTML,
            nombre: fila.querySelector('.fila_nombre').innerHTML,
            precio: fila.querySelector('.fila_precio').innerHTML,
            categoria: fila.querySelector('.fila_categoria').innerHTML,
            imagen: fila.querySelector('.fila_imagen').getAttribute('src')
        }
        document.getElementById('detalles_nombre').value = producto.nombre;
        document.getElementById('detalles_stock').value = producto.stock;
        document.getElementById('detalles_descripcion').value = producto.descripcion;
        document.getElementById('detalles_precio').value = producto.precio;
        document.getElementById('detalles_categoria').value = producto.categoria;
        document.getElementById('detalles_imagen').value = producto.imagen;

        document.getElementById('id').value = producto.id;
        document.getElementById('imagen').setAttribute('src',document.getElementById('detalles_imagen').value);
        document.getElementById('detalles_imagen').addEventListener('keyup',function(){
        document.getElementById('imagen').setAttribute('src',document.getElementById('detalles_imagen').value);
        })

    }
}







const tabla = new Tabla('tabla');

tabla.addBotones(new BotonesEliminar());
tabla.addBotones(new BotonesEditar());
tabla.actualizar();









