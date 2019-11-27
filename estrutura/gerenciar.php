<?php 
include_once ('.\class\autoload.php');

    $receita = autoLoad('receitaBanco');
    $receita = new ReceitaBanco();
	$rp = $receita->selectById($_POST['selecionado']);
?>
<html>

<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
		<header>
			<nav class="topo">
				<div id="busca">
					<input type="text" id="txtbusca" />
					<img src="assets/img/lupa.png" id="btnBusca" alt="Buscar" width="30px" height="30px" />
				</div>
				<div id="barra">
						<img src="assets/img/garfo.png" width="25px" height="25px" />
					<img src="assets/img/logout.png" width="25px" height="25px" />
					<a href="#">Sair</a>
                </div>
            <ul id="menuadm">
            <li><a href="pendentes.php">Receitas Pendentes</a></li>
            <li><a href="gerenciar.php">Gerenciar Receita</a></li>
	        </ul>
			</nav>
		</header>
		<section id="conteiner">
           <div>
				<h4>Título da receita</h4>
				<div class="row">
					<div>
						<img src="assets/img/pave1.jpg" height="200px">
					</div>
					<div>
						<img src="assets/img/pave2.jpg" height="200px">
					</div>
					<div>
						<img src="assets/img/pave3.jpg" height="200px">
					</div>
					<table border="0" id="metodo">
						<tr>
							<th>
								<h5>Tempo de Preparo</h5>
							</th>
							<th>
								<h5>Rendimento</h5>
							</th>
							<th>
								<h5>Autor</h5>
							</th>
						</tr>
						<tr>
							<td>
								<h6>xx.min</h6>
							</td>
							<td>
								<h6>xx porções</h6>
							</td>
							<td>
								<h6>@John_doe</h6>
							</td>
						</tr>
					</table>
				</div>

				<div id="ingredientes">
					<h4>Ingredientes</h4>
					<ul>
						<li>Ingredientes</li>
						<li>Ingredientes</li>
						<li>Ingredientes</li>
						<li>Ingredientes</li>
						<li>Ingredientes</li>
					</ul>
				</div>
				<div id="preparo">
						<h4>Modo de Preparo</h4>
					<article>
						<p>
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
							vitae
							dicta sunt explicabo.</p>
							<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
							fugit,
							
							sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							
							<p>Neque porro
							quisquam
							est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
							numquam eius
						    </p>
							<p>
							modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p> Ut enim ad
							minima
							veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex
							ea
						   </p>
							<p>
							commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
							quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
							pariatur
							</p>
					</article>
				</div>
			</div>
            <br>
            <input type='submit' name='submit' value='Postar' />
            <br>
        </section>
		

	<footer>
		<div class="footer">
			<p>Página do Administrador</p>
			<small>Copyright © 2019 </small>
		</div>
	</footer>
</body>
</html>