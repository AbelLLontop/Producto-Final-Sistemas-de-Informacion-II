<section class="contenedor_navegador">
	<header class="perfil_usuario">
		<img src="https://i.pinimg.com/originals/75/85/4f/75854fd8f4af32cbd02574fda26a817b.png" alt="">
		<div class="datosUsuario">
			<span class="nombre">Abel	<input type="checkbox" id="nocturno">
</span><br>
			<span class="cargo">Administrador</span>
		</div>
	</header>
	<div class="inicio"><a class=" <?= $data["seccion__inicio"]??"" ?>" href=<?= Importar::direccion('inicio'); ?>><?=Importar::SVG('home')?>Inicio</a></div>
	<section class="seccionLinks">
			<span>Permisos Aministrador</span>

		<nav>
			<ul class="links" >
				<li><a
					class="item_link <?= $data["seccion__productos"]??"" ?>"
					href=<?= Importar::direccion('GestionProductos'); ?>
					>
					<?= Importar::SVG('producto') ?>Productos</a></li>
				<li><a
					class="item_link <?= $data["seccion__clientes"]??"" ?>"
					href=<?= Importar::direccion('GestionClientes'); ?>
					>
					<?= Importar::SVG('cliente') ?>Cliente</a></li>

				<li><a
					class="item_link <?= $data["seccion__pedidos"]??"" ?>"
					href=<?= Importar::direccion('GestionPedidos'); ?>
					>
					<?= Importar::SVG('pedidos') ?>Pedidos</a></li>
				<li><a
					class="item_link <?= $data["seccion__empleados"]??"" ?>"
					href=<?= Importar::direccion('GestionEmpleados'); ?>
					>
					<?= Importar::SVG('maleta') ?>Empleados</a></li>
			</ul>
		</nav>
	</section>
</section>

<script>
/*
 document.addEventListener("DOMContentLoaded", function(event) {
 	  });

*/
	let nocturno = document.getElementById('nocturno');
			if(localStorage.getItem('nocturno')!=null){
				if(localStorage.getItem('nocturno')=="true"){
					document.body.className = 'nocturno';
					nocturno.checked = true;
				}else{
					document.body.classList.remove('nocturno');
				nocturno.checked = false;
				}
		}







	nocturno.addEventListener('change',function(){
			if(nocturno.checked){
				localStorage.setItem("nocturno",true);
				document.body.className = 'nocturno';
			}else{
				localStorage.setItem("nocturno",false);
				document.body.classList.remove('nocturno');
				nocturno.checked=false;
			}
	});



</script>

