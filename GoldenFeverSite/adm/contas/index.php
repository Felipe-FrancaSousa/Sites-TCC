<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Contas - Golden Fever</title>
    
    <meta charset="utf-8">
	<meta name="author" content="Emperor Arts">
	<meta name="generator" content="Dreamweaver">
	<meta name="description" content="Contas cadastradas no sistema">
	<meta name="application-name" content="Golden Fever">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../../Estilos/comum.css">
    <link rel="stylesheet" href="../../Estilos/artigos.css">
    <link rel="stylesheet" href="../../Estilos/rodape.css">
    <link rel="stylesheet" href="../../Estilos/elementos.css">
    
    <script src="../../JS/jquery-3.3.1.min.js"></script>
    
    <style>
		*
		{
			outline: none;	
		}
		
		@font-face
		{
			font-family: Pixel;
			src: url(../../Fontes/Pixellari.ttf);
			font-weight: normal;
			font-style: normal;	
		}
		
		body
		{
			width: 100%;
			padding-top: 115px;
			font-family: Pixel;	
		}
		
		td, th
		{
			border: 1px solid #000;
			color: #333;
			font-size: 14pt;
		}
		
		th
		{
			font-weight: bold;
			color: #FFF;
			background-color: #666;
			text-align: left;
		}
        
        table *
        {
			word-wrap: break-word;
        }

	</style>
</head>
<body>
	<nav>
        <ul id="desktop">
			<li id="oculto">
				<div class="icones" id="menu">
					<img src="../../Imagens/Icones/Menu.png" alt="Menu"><br>
				</div>
			</li>
            <img src="../../Imagens/tocha.gif" alt="Tocha" class="tocha" id="esquerda">
            
            <div class="divLogo">
                <a href="../../">
                    <img src="../../Imagens/Logo.png" alt="Logo The Emperor Tomb">
                </a>
            </div>
                
            <img src="../../Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">
            
        </ul>
        
		<ul id="mobile">
			<li class="mobile">
				<a href="../../#sobre">
					Sobre
				</a>
			</li>
			<li class="mobile">
				<a href="../../#download">
					Download
				</a>
			</li>
			<li class="mobile">
				<a href="../../#feedback">
					Feedback
				</a>
			</li>
			<li class="mobile">
				<a href="../../#ajuda">
					Ajuda
				</a>
			</li>
			<li class="mobile">
				<a href="../../ranking">
					Ranking
				</a>
			</li>
			<li class="mobile">
			</li>
			<?php
				if (isset($_SESSION['logado'])) 
				{
					if ($_SESSION['logado'] != true) 
					{
						echo "<li class='mobile'>
									<a href='../../conta'>
										Login
									</a>
								</li>";
					} 
					else 
					{
						echo "<li class='mobile'>
									<a href='../../conta' class='aConta'>
										Ver Conta
									</a>
								</li>";

						$privilegio = array();
						$privilegio = $_SESSION['privilegio'];
						if ($privilegio['0'] == 1)
						{
							echo "<li class='mobile'>
										<a href='../'>
											Sistema
										</a>
									</li>";
						}	

						 echo "	<li class='mobile'>
							 		<a href='../../conta/logoff'>
										Sair
									</a>
								</li>";
					}
				} 
				else 
				{
					echo "<li class='mobile'>
								<a href='../../conta'>
									Login
								</a>
							</li>";
				}
				echo "</div>"
			?>
		</ul>
    </nav>
	<article>
		<h1>Lista de usuários cadastrados</h1>
		<?php
			require('../../connect.php');

			if(!($lista = mysqli_query($con, "Select * from `tbl_usuario`")))
				{
					printf("Error: %s\n", mysqli_error($con));
				}

			$id = array();
			$nome = array();
			$email = array();
			$data_nasc = array();
			$privilegio = array();

			echo "<div class = 'containerContas'>";
			echo "<table width='100%'>
					<tr>
						<th>
							ID
						</th>
						<th>
							Nome
						</th>
						<th>
							E-mail
						</th>
						<th>
							Data de Nascimento
						</th>
						<th>
							Privilégio
						</th>
					</tr>";

			while($contas = mysqli_fetch_array($lista))
			{
				array_push($id, $contas['id']);
				array_push($nome, $contas['nome']);
				array_push($email, $contas['email']);
				array_push($data_nasc, $contas['data_nasc']);
				array_push($privilegio, $contas['privilegio']);
			}

			$idReverso = array_reverse($id);
			$nomeReverso = array_reverse($nome);
			$emailReverso = array_reverse($email);
			$data_nascReverso = array_reverse($data_nasc);
			$privilegioReverso = array_reverse($privilegio);

			for ($i=0; $i < count($nome); $i++) 
			{ 
					echo 	"<tr>
								<td>
									$idReverso[$i]
								</td>
								<td>
									$nomeReverso[$i]
								</td>
								<td>
									$emailReverso[$i]
								</td>
								<td>
									$data_nascReverso[$i]
								</td>
								<td>
									$privilegioReverso[$i]
								</td>
								<!--
									<td>
										<form method = 'post' action = 'excluir.php'>
										<input type='hidden' name='id' value= '$idReverso[$i]'>
										<input type='submit' value=Excluir>
										</form>
									</td>-->
							</tr>";
			}

			echo "</table>";
			echo "</div>";
		?>
	</article>
	
    
    <footer>
        <section>
            <ul>
                <h3><a href="../../">Página Inicial</a></h3><br>
                <li><a href="../../#sobre">Sobre</a></li>
                <li><a href="../../#download">Download</a></li>
                <li><a href="../../#feedback">Feedback</a></li>
                <li><a href="../../#ajuda">Ajuda</a></li>
            </ul>

		   	<ul>
				<h3>Sistema</h3><br>
				<li><a href='../feedbacks'>Feedbacks</a></li>
				<li><a href='./'>Contas</a></li>
				<li>&nbsp;</li>
				<li><a href="../../ranking">Ranking</a></li>
			</ul>

            <ul>
                <h3>Conta</h3><br>
                <li><a href='../../conta'>Minha Conta</a></li>
                <li><a href='../../conta/editar'>Editar Informações</a></li>
            </ul>
        </section>
        <section>
            <small>&copy; 2019 - <a>Emperor Arts</a> - Todos os direitos reservados</small>
        </section>
	</footer>
    
    <!-- SCRIPTS -->
	
	<script>
		var clicado = false;
		$("#menu").on('click', function(event) {
			if (clicado == false)
			{
				$('nav').css({'height': '100vh'});
				clicado = true;
				$('#mobile').fadeIn();
				$('#mobile').css({'display': 'flex'});
				$('.mobile').css({'display': 'block'});
				
			}
			else if (clicado == true)
			{
				$('nav').css({'height': '75px'});
				clicado = false;
				$('#mobile').fadeOut();
				$('#mobile').css({'display': 'none'});
				$('.mobile').css({'display': 'none'});
			}

		});
		
		$(".mobile").on('click', function(event) {
			$('nav').css({'height': '75px'});
			clicado = false;
			$('#mobile').fadeOut();
			$('#mobile').css({'display': 'none'});
			$('.mobile').css({'display': 'none'});
		});
	</script>	
</body>
</html>