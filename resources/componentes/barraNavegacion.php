
<section class="contenedor_navegador">
    <header class="perfil_usuario">
        <div class="contenedor_imagen">
            <img src="https://i.pinimg.com/474x/3a/f5/62/3af562a54b9730b8c2d8b48ab9da7bac.jpg" alt="">
            
                    </div>
        <div class="datosUsuario">
            <span class="nombre">Abel
                <label for="nocturno">
                    <input type="checkbox" mame="nocturno" id="nocturno">
                </label>
            </span><br>
            <span class="cargo">Administrador</span>
        </div>
    </header>
    <div class="inicio"><a class=" <?= $data["seccion__inicio"] ?? "" ?>" href=<?= Importar::direccion('inicio'); ?>><?= Importar::SVG('home') ?>Inicio</a></div>
    <section class="seccionLinks">
        <span>Permisos Aministrador</span>

        <nav>
            <ul class="links" >
                
                <li><a
                        class="item_link <?= $data["seccion__productos"] ?? "" ?>"
                        href=<?= Importar::direccion('GestionProductos'); ?>
                        >
                        <?= Importar::SVG('producto') ?>Almacen</a></li>
                <li><a
                        class="item_link <?= $data["seccion__clientes"] ?? "" ?>"
                        href=<?= Importar::direccion('GestionClientes'); ?>
                        >
                        <?= Importar::SVG('cliente') ?>Cliente</a></li>

                <li><a
                        class="item_link <?= $data["seccion__pedidos"] ?? "" ?>"
                        href=<?= Importar::direccion('GestionPedidos'); ?>
                        >
                        <?= Importar::SVG('pedidos') ?>Pedidos</a></li>
                <li><a
                        class="item_link <?= $data["seccion__empleados"] ?? "" ?>"
                        href=<?= Importar::direccion('GestionEmpleados'); ?>
                        >
                        <?= Importar::SVG('maleta') ?>Empleados</a></li>
            </ul>
        </nav>
    </section>
</section>

<script>
    let nocturno = document.getElementById('nocturno');
    
    if (localStorage.getItem('nocturno') != null) {
        if (localStorage.getItem('nocturno') == "true") {
            document.body.className = 'nocturno';
            nocturno.checked = true;
        } else {
            document.body.classList.remove('nocturno');
            nocturno.checked = false;
        }
    }


    nocturno.addEventListener('change', function () {
        if (nocturno.checked) {
            localStorage.setItem("nocturno", true);
            document.body.className = 'nocturno';
        } else {
            localStorage.setItem("nocturno", false);
            document.body.classList.remove('nocturno');
            nocturno.checked = false;
        }
    });



</script>

