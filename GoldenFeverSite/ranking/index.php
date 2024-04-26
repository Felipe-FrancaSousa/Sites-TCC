<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contas - The Emperor Tomb</title>
    
    <link rel="stylesheet" href="../Estilos/comum.css">
    <link rel="stylesheet" href="../Estilos/artigos.css">
    <link rel="stylesheet" href="../Estilos/rodape.css">
    <link rel="stylesheet" href="../Estilos/elementos.css">
    
    <style>
		*
		{
			outline: none;	
		}
		
		@font-face
		{
			font-family: Pixel;
			src: url(../Fontes/Pixellari.ttf);
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
		
		h3
		{
			margin: 0;
		}
		
		

	</style>
</head>
<body>
	<nav>
        <ul>
            <img src="../Imagens/tocha.gif" alt="Tocha" class="tocha" id="esquerda">
            
            <div class="divLogo">
                <a href="../">
                    <img src="../Imagens/Logo.png" alt="Logo The Emperor Tomb">
                </a>
            </div>
                
            <img src="../Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">
        </ul>
    </nav>
	<article>
		<h1>Ranking Geral</h1>
		<?php
			require('../connect.php');

			if(!($lista = mysqli_query($con, "Select * from `tbl_ranking` ORDER BY `pontuacao`")))
				{
					printf("Error: %s\n", mysqli_error($con));
				}

			$id = array();
			$username = array();
			$data_hora = array();
			$pontuacao = array();

			echo "<table width='100%'>
					<tr>
						<th>
							Usuário
						</th>
						<th>
							Data
						</th>
						<th>
							Pontuação
						</th>
					</tr>";

			while($ranking = mysqli_fetch_array($lista))
			{
				array_push($id, $ranking['id']);
				array_push($username, $ranking['usuario']);
				array_push($data_hora, $ranking['data_hora']);
				array_push($pontuacao, $ranking['pontuacao']);
			}

			$idReverso = array_reverse($id);
			$usernameReverso = array_reverse($username);
			$data_horaReverso = array_reverse($data_hora);
			$pontuacaoReverso = array_reverse($pontuacao);

			for ($i=0; $i < count($id); $i++) 
			{ 
					echo 	"<tr>
								<td>
									$usernameReverso[$i]
								</td>
								<td>
									$data_horaReverso[$i]
								</td>
								<td>
									$pontuacaoReverso[$i]
								</td>
							</tr>";
			}

			echo "</table>";
		?>
	</article>
	
    
    <footer>
        <section>
            <ul>
                <h3><a href="../">Página Inicial</a></h3><br>
                <li><a href="../#sobre">Sobre</a></li>
                <li><a href="../#download">Download</a></li>
                <li><a href="../#feedback">Feedback</a></li>
                <li><a href="../#ajuda">Ajuda</a></li>
            </ul>

		   	<ul>
				<h3>Sistema</h3><br>
				<li><a href='../adm/feedbacks'>Feedbacks</a></li>
				<li><a href='../adm/contas'>Contas</a></li>
				<li>&nbsp;</li>
				<li><a href="./">Ranking</a></li>
			</ul>

            <ul>
                <h3>Conta</h3><br>
                <li><a href='../conta'>Minha Conta</a></li>
                <li><a href='../conta/editar'>Editar Informações</a></li>
            </ul>
        </section>
        <section>
            <small>&copy; 2019 - <a>Emperor Arts</a> - Todos os direitos reservados</small>
        </section>
	</footer>
	
</body>
</html>