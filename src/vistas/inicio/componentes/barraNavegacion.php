<section class="contenedor_navegador">
	<header class="perfil_usuario">
		<img src="https://i.pinimg.com/originals/75/85/4f/75854fd8f4af32cbd02574fda26a817b.png" alt="">
		<div class="datosUsuario">
			<span class="nombre">Abel</span><br>
			<span class="cargo">Administrador</span>
		</div> 
	</header>
	<div class="inicio"><a class=" <?= $data["seccion__inicio"]??"" ?>" href="inicio"><?=Importar::SVG('home')?>Inicio</a></div>
	<section class="seccionLinks">
			<span>Permisos Aministrador</span>
 
		<nav>
			<ul class="links" >
				<li><a class="item_link " href="#"><?= Importar::SVG('producto') ?>Productos</a></li>
				<li><a class="item_link" href="#"><?= Importar::SVG('cliente') ?>Cliente</a></li>
				<li><a class="item_link " href="#"><?= Importar::SVG('pedidos'); ?>Pedidos</a></li>
				<li><a 
					class="item_link <?= $data["seccion__empleados"]??"" ?>" 
					href=<?= Importar::direccion('GestionEmpleados'); ?>
					>
					<?= Importar::SVG('maleta') ?>Empleados</a></li>
			</ul>
		</nav>
	</section>
</section>