class Formulario{
    constructor(contenedor){
        this.contenedor = document.getElementById(contenedor);
        this.formulario = this.contenedor.querySelector('form');
        this.btnCancelar = this.contenedor.querySelector('.btn_cancelar');
    }
    ocultar(){
        this.contenedor.style.display = "none";
    }
    mostrar(){
        this.contenedor.style.display = "flex";   
    }
}


class Boton{
    constructor(nameClass){
        this.nameClass = nameClass;

    }
    actualizar(table) {
        this.table = table;
        this.botones = this.table.querySelectorAll(this.nameClass);
        this.botones.forEach((botonSolo)=>{
            botonSolo.addEventListener('click',()=>{
                this.clickAccion(botonSolo);
            })
            
        });
    }
}


class Tabla{
    botones = [];
    constructor(table) {
        this.table = document.getElementById(table);
    }
    addBotones(boton){
        this.botones.push(boton);
    }
    actualizar() {
         for(let btn of this.botones){
                btn.actualizar(this.table);
            }
    }

}

