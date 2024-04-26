<?php
	session_start();
?>

<!doctype html>
<html lang="pt-BR">
<head>

	<meta charset="utf-8">
	<meta name="author" content="Emperor Arts">
	<meta name="generator" content="Dreamweaver">
	<meta name="description" content="Página inicial do jogo Golden Fever">
	<meta name="application-name" content="Golden Fever">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Início - Golden Fever</title>

	<link rel="stylesheet" href="Estilos/comum.css">
	<link rel="stylesheet" href="Estilos/elementos.css">
	<link rel="stylesheet" href="Estilos/artigos.css">
	<link rel="stylesheet" href="Estilos/sobre.css">
	<link rel="stylesheet" href="Estilos/download.css">
	<link rel="stylesheet" href="Estilos/galeria.css">
  	<link rel="stylesheet" href="Estilos/swiper.min.css">
	<link rel="stylesheet" href="Estilos/feedback.css">
	<link rel="stylesheet" href="Estilos/ajuda.css">
	<link rel="stylesheet" href="Estilos/rodape.css">

	<script src="JS/jquery-3.3.1.min.js"></script>
	<script src="JS/swiper.min.js"></script>

	<style>
		*
		{
			outline: none;	
		}
		
		@font-face
		{
			font-family: Pixel;
			src: url(Fontes/Pixellari.ttf);
			font-weight: normal;
			font-style: normal;
		}
		
		.swiper-container {
		 	width: 100%;
		 	height: 100%;
		 	margin-left: auto;
		 	margin-right: auto;
		}
		
		.swiper-slide {
		 	text-align: center;
		 	font-size: 18px;
		 	background: #fff;
		 	display: -webkit-box;
		 	display: -ms-flexbox;
		 	display: -webkit-flex;
		 	display: flex;
		 	-webkit-box-pack: center;
		 	-ms-flex-pack: center;
		 	-webkit-justify-content: center;
		 	justify-content: center;
		 	-webkit-box-align: center;
		 	-ms-flex-align: center;
		 	-webkit-align-items: center;
		 	align-items: center;
		}
		
		.swiper-button-next, .swiper-button-prev
		{
			font-family: Pixel;
			font-size: 50px;
			color: #000;
			text-align: center;
			padding-top: 9px;
			padding-left: 2px;
			transition: 0.3s;
			overflow: hidden;
			cursor: pointer;
			border: none;
			box-sizing: border-box;
		}

		.swiper-button-next:hover, .swiper-button-prev:hover
		{
			color: #FFF;
		}

		.swiper-button-next:focus, .swiper-button-prev:focus
		{
			outline: none;
		}

		#proximo
		{
			transform: rotate(90deg);
			margin-right: 3px;
		}

		#anterior
		{
			transform: rotate(270deg);
			margin-left: 3px;
		}
		
		.swiper-slide
		{
			background-size: cover;
			background-position: center;
		}
		
		input:webkit-autofill
		{
			-webkit-text-fill-color: #FFF !important!;
			-webkit-box-shadow: 0 0 0px 1000px #f9fbfd inset !important;
		}
		
		/*@media only screen and (max-width: 970px) 
		{
			.swiper-button-next, .swiper-button-prev
			{
				display: none;
			}
		}*/
	</style>
</head>
<body>

	<!-- Barra de Navegação -->

	<nav>
		<ul id="desktop">
			<li id="oculto">
				<div class="icones" id="menu">
					<img src="Imagens/Icones/Menu.png" alt="Menu"><br>
				</div>
			</li>
			<li>
				<div class="icones">
					<a href="#sobre">
						<img src="Imagens/Icones/Sobre.png" alt="Sobre"><br>
						Sobre
					</a>
				</div>
			</li>
			<li>
				<div class="icones">
					<a href="#download">
						<img src="Imagens/Icones/Download.png" alt="Download"><br>
						Download
					</a>
				</div>
			</li>
			<li>
				<div class="icones">
					<a href="#feedback">
						<img src="Imagens/Icones/Feedback.png" alt="Feedback"><br>
						Feedback
					</a>
				</div>
			</li>

			<img src="Imagens/tocha.gif" alt="Tocha" class="tocha" id="esquerda">
            
			<div class="divLogo">
				<a href="#sobre">
					<img src="Imagens/Logo.png" alt="Logo Golden Fever">
				</a>
			</div>
			
			<img src="Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">

			<li>
				<div class="icones">
					<a href="#ajuda">
						<img src="Imagens/Icones/Ajuda.png" alt="Ajuda"><br>
						Ajuda
					</a>
				</div>
			</li>
			<li>
				<div class="icones">
					<a href="ranking">
						<img src="Imagens/Icones/Ranking.png" alt="Ranking"><br>
						Ranking
					</a>
				</div>
			</li>
			<li id="conta">
                <?php
                    if (isset($_SESSION['logado'])) 
					{
                        if ($_SESSION['logado'] != true) 
						{
                            echo "<div class='icones' id='contaOffline'>
                                    <img src='Imagens/Icones/ContaOffline.png' alt='Conta'>
									<a href='conta' class='aConta'>
										Login
									</a>";
                        } 
						else 
						{
                            echo "<div class='icones' id='contaOnline'>
                                    <img src='Imagens/Icones/ContaOnline.png' alt='Conta'>
									<a href='conta' class='aConta'>
										Ver Conta
									</a>";
							
							$privilegio = array();
                            $privilegio = $_SESSION['privilegio'];
                            if ($privilegio['0'] == 1)
                            {
                                echo "<a href='adm' class='aConta'>
                                            Sistema
                                        </a>";
                            }	
							
							 echo "	<a href='conta/logoff' class='aConta'>
                                        Logoff
                                    </a>";
							
                        }
					} 
					else 
					{
                        echo "<div class='icones' id='contaOffline'>
                                    <img src='Imagens/Icones/ContaOffline.png' alt='Conta'>
                                        <a href='conta' class='aConta'>
                                            Login
                                        </a>";
                    }
                    echo "</div>"
                ?>
			</li>
		</ul>
		
		<ul id="mobile">
			<li class="mobile">
				<a href="#sobre">
					Sobre
				</a>
			</li>
			<li class="mobile">
				<a href="#download">
					Download
				</a>
			</li>
			<li class="mobile">
				<a href="#feedback">
					Feedback
				</a>
			</li>
			<li class="mobile">
				<a href="#ajuda">
					Ajuda
				</a>
			</li>
			<li class="mobile">
				<a href="ranking">
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
									<a href='conta'>
										Login
									</a>
								</li>";
					} 
					else 
					{
						echo "<li class='mobile'>
									<a href='conta' class='aConta'>
										Ver Conta
									</a>
								</li>";

						$privilegio = array();
						$privilegio = $_SESSION['privilegio'];
						if ($privilegio['0'] == 1)
						{
							echo "<li class='mobile'>
										<a href='adm'>
											Sistema
										</a>
									</li>";
						}	

						 echo "	<li class='mobile'>
							 		<a href='conta/logoff'>
										Sair
									</a>
								</li>";
					}
				} 
				else 
				{
					echo "<li class='mobile'>
								<a href='conta'>
									Login
								</a>
							</li>";
				}
				echo "</div>"
			?>
		</ul>
	</nav>
	
	<!-- Artigos -->

	<!-- Sobre o Jogo -->

	<article class="artigos" id="sobre">
		<hgroup>
			<h1>EXPLORE O MUNDO EM BUSCA DE JÓIAS</h1>
			<h4>Golden Fever é um jogo de aventura em que você ajuda um explorador a vasculhar tumbas antigas ao redor do mundo em busca de tesouros preciosos</h4>
		</hgroup>
		<div id="boxesSobre">
			<table width="100%"><tr><td align="center">
				<section class="boxSobre">
					<section class="boxSobreTexto">
						<h2>Resolva Enigmas Desafiadores</h2>
						<p>Durante todo o jogo, você irá se deparar com diversos enigmas para testar suas habilidades lógicas</p>
					</section>
				</section> 
				<section class="boxSobre">
					<section class="boxSobreTexto">
						<h2>Passe Por Armadilhas e Inimigos</h2>
						<p>Saqueadores farão o possível para que você não chegue até seu objetivo</p>
						<h3>DERROTE-OS!</h3>
					</section>
				</section> 
				<section class="boxSobre">
					<section class="boxSobreTexto">
						<h2>Colete as Moedas e Complete sua Missão</h2>
						<p>Ao final de cada fase, você lutará com um chefão e ganhará sua recompensa tão desejada</p>
					</section>
				</section> 
				<section class="boxSobre">
					<section class="boxSobreTexto">
						<h2>Explore a América do Sul</h2>
						<p>Saia em busca da Cidade Perdida e aprenda sobre as civilizações antigas</p>
					</section>
				</section> 
				<section class="boxSobre">
					<section class="boxSobreTexto">
						<h2>Procure por Artefatos Perdidos</h2>
						<p>Explore tumbas antigas e descubra tesouros incas</p>
					</section>
				</section> 
			</td></tr></table>
		</div>
	</article>

	<!-- Download -->

	<article class="artigos" id="download">
		<hgroup>
			<h1>FAÇA O DOWNLOAD DO PROTÓTIPO AGORA</h1>
			<h4>Golden Fever ainda está em fase de testes, porém você pode baixar os protótipos e nos dizer o que acha</h4>
		</hgroup>
			<section id="boxesDownload">
				
				<div class="galeria">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image: url('Imagens/Galeria/1.jpg')"></div>
							<div class="swiper-slide" style="background-image: url('Imagens/Galeria/2.jpg')"></div>
							<div class="swiper-slide" style="background-image: url('Imagens/Galeria/3.jpg')"></div>
							<div class="swiper-slide" style="background-image: url('Imagens/Galeria/4.jpg')"></div>
						</div>

						<div class="swiper-pagination"></div>

						<div class="swiper-button-next" id="proximo"><span class="botaoGaleria">^</span></div>
						<div class="swiper-button-prev" id="anterior"><span class="botaoGaleria">^</span></div>
					</div>
					
					<script src="JS/jquery-3.3.1.min.js"></script>
					<script>
						var swiper = new Swiper('.swiper-container', {
							slidesPerView: 1,
							spaceBetween: 0,
							loop: true,
							pagination: {
								el: '.swiper-pagination',
								clickable: true,
							},
							navigation: {
								nextEl: '.swiper-button-next',
								prevEl: '.swiper-button-prev',
							},
						});
					</script>
				</div>
				
				<a href="GoldenFever-Prototype.rar">
				<div class="download">
					<img src="Imagens/Bau.png" alt="Download">
					<h3>Faça o download clicando aqui</h3>
				</div>
				</a>
			</section>
	</article>
	
	<!-- Feedback -->
	
	<article class="artigos" id="feedback">
		<hgroup>
			<h1>DEIXE SUA OPINIÃO PARA NÓS</h1>
			<h4>Sua opinião é importante para nos ajudar no desenvolvimento do jogo</h4>
		</hgroup>
		<section id="boxesFeedback">
			<p>Diga-nos o que achou do jogo escrevendo sua opinião no formulário a seguir, além, é claro, de propostas para melhoria, os bugs encontrados por você e qualquer outra coisa que quiser nos dizer ;&#41;</p>
			<form id="formFeedback">
				
				<div class="inputForm">
					<input type="text" class="formFeedback" name="nome" maxlength="30" required>
					<span>Nome</span>
				</div>
				
				<div class="inputForm">
					<input type="email" class="formFeedback" name="email" maxlength="30" required>
					<span>Email</span>
				</div>
				
				<div class="inputForm" id="titulo">
					<input type="text" class="formFeedback" name="titulo" maxlength="40" required>
					<span>Título</span>
				</div>
				
				<div class="inputForm" id="mensagem">
					<textarea class="formFeedback" id="texto" name="mensagem" maxlength="500" required></textarea>
					<span>Feedback</span>
				</div>
				
				<div class="tiposFeedback">
					<span>Tipo:</span>
					
					<div class="labelRadio">
						<div class="radioForm">
							<input type="radio" class="radioFeedback" id="sugestao" value="sugestao" name="tipo" checked>
							<label for="sugestao" class="radio"></label>
						</div>
						<label for="sugestao">Sugestão</label>
					</div>
					
					<div class="labelRadio">
						<div class="radioForm">
							<input type="radio" class="radioFeedback" id="reclamacao" value="reclamacao" name="tipo">
							<label for="reclamacao" class="radio"></label>
						</div>
						<label for="reclamacao">Reclamação</label>
					</div>
					
					<div class="labelRadio">
						<div class="radioForm">
							<input type="radio" class="radioFeedback" id="outros" value="outros" name="tipo">
							<label for="outros" class="radio"></label>
						</div>
						<label for="outros">Outros</label>
					</div>
				</div>
				
				<input type="submit" name="submit" value="Enviar">
			</form>
            
		</section>
	</article>

	<!-- Ajuda -->
	
	<article id="ajuda">
		<hgroup>
			<h1>PRECISA DE AJUDA EM ALGO?</h1>
			<h4>Veja as principais perguntas:</h4>
		</hgroup>
			<div id="boxesAjuda">
				<table width="100%"><tr><td align="center">
					<section class="boxAjuda">
						<h3>Como eu instalo o jogo?</h3>
						<p>É bem simples: <a href="#download">clique aqui</a> e pressione o botão de download. Espere terminar e execute o arquivo clicando duas vezes sobre ele. A partir daí, é só seguir as instruções da tela e se divertir</p>
					</section>
					<section class="boxAjuda">
						<h3>Preciso pagar?</h3>
						<p>Não, todos os nossos serviços são 100% gratuitos. Pode economizar pra skins no Fortnite ;&#41;</p>
					</section>
					<section class="boxAjuda">
						<h3>Preciso de cadastrado?</h3>
						<p>Sim, você pode <a href="conta/login">clicar aqui</a> e fazer o seu cadastro gratuitamente</p>
					</section>
					<section class="boxAjuda">
						<h3>O jogo usa internet?</h3>
						<p>Sim, precisamos de internet para poder instalar o jogo e fazer login em sua conta, mas também disponibilizamos o Modo Offline, no qual você pode se divertir mesmo sem internet</p>
					</section>
				</td></tr></table>
			</div>
			<button>Clique aqui para mais ajuda</button>
	</article>
	
	<!-- RODAPÉ -->
	
	<footer>
        <section>
            <ul>
                <h3>Seções</h3><br>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#download">Download</a></li>
                <li><a href="#feedback">Feedback</a></li>
                <li><a href="#ajuda">Ajuda</a></li>
            </ul>

		   	<ul>
				<h3>Sistema</h3><br>
				<li><a href='adm/feedbacks'>Feedbacks</a></li>
				<li><a href='adm/contas'>Contas</a></li>
				<li>&nbsp;</li>
				<li><a href="ranking">Ranking</a></li>
			</ul>

            <ul>
                <h3>Conta</h3><br>
                <li><a href='conta'>Minha Conta</a></li>
                <li><a href='conta/editar'>Editar Informações</a></li>
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
	
	<script>
		$('#formFeedback').submit(function(e) {
			e.preventDefault;
			var formulario = $(this);
			var retorno = inserirFormulario(formulario);

			function inserirFormulario(dados) {
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"feedback.act.php",
					async:false
				}).then(sucesso,falha);

				function sucesso(data){
					console.log(data);
					alert("Feedback enviado com sucesso!\n\nObrigado! ;)");
				}

				function falha(){
					console.log("erro");
					alert("Ocorreu um erro!\n\nNos desculpe, resolveremos assim que possível");
				}
			}

			return false;
		});
	</script>
	
	
	<script type="text/javascript">
		$(document).ready(function(){
		 	$("a").on('click', function(event) {
				if (this.hash !== "") {
					event.preventDefault();

					var hash = this.hash;
					var p = $(hash).offset().top; // A posição do id
					var a = $('#desktop').height(); // A altura da NavBar
					var c = p - a; // O quanto que tem que descer

					$('html, body').animate({
						scrollTop: c
					}, 800, function(){
						window.location.hash = c;
					});
				} 
		  	});
		});
	</script>
	
</body>
</html>

