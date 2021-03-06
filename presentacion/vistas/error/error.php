<?php
Importar::headInicio();
Importar::headCierre();
?>


<h1><?= $this->titulo ?></h1>
<h2><?= $this->mensaje ?></h2>
<h3><?= $this->mensaje2 ?></h2>

<style>
	:root{
		--color_fondo:white;
		--color_texto:#0c213b;
		
		

	}

	.nocturno{
		--color_fondo:#0c213b;
		--color_texto:white;
		
	}


	html{
		height: 100vh;
	}
	body{
		background: var(--color_fondo);
		width: 100%;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		color: var(--color_texto);
		margin: 0;
		box-sizing: border-box;
		font-family: calibri;
		flex-direction: column;
	}
	h1,h2{
		margin:0;
		padding: 0;
	}
</style>


<script>
	if (localStorage.getItem('nocturno') != null) {
		if (localStorage.getItem('nocturno') == "true") {
			document.body.className = 'nocturno';
		} else {
			document.body.classList.remove('nocturno');
		}
	}
</script>

<?php
Importar::footer();
?>