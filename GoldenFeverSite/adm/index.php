<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Sistema - Golden Fever</title>
    
    <meta charset="utf-8">
	<meta name="author" content="Emperor Arts">
	<meta name="generator" content="Dreamweaver">
	<meta name="description" content="Sistema do projeto Golden Fever">
	<meta name="application-name" content="Golden Fever">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../Estilos/comum.css">
	<link rel="stylesheet" href="../Estilos/elementos.css">
	<link rel="stylesheet" href="../Estilos/rodape.css">

	<script src="JS/jquery-3.3.1.min.js"></script>

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
            font-family: Pixel, "sans serif";
        }
        
        .links
        {
            width: 400px;
            height: 400px;
            border: 3px solid goldenrod;
            display: inline-block;
            margin: 15px;
            text-align: center;
            position: relative;
        }
        
        article
        {
            margin: 50px 0;
        }
        
        a.link
        {
            font-size: 20pt;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
        }
        
        a.link:hover
        {
            color: #000;
        }
        
    </style>
</head>
<body>
    <nav>
		<ul id="desktop">
			<li id="oculto">
				<div class="icones" id="menu">
					<img src="../Imagens/Icones/Menu.png" alt="Menu"><br>
				</div>
			</li>

			<img src="../Imagens/tocha.gif" alt="Tocha" class="tocha" id="esquerda">
            
			<div class="divLogo">
				<a href="../">
					<img src="../Imagens/Logo.png" alt="Logo Golden Fever">
				</a>
			</div>
			
			<img src="../Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">
		</ul>
    </nav>
    
    <!-- LINKS -->
    <article>
        <table width="100%"><tr><td align="center">
        <section class="links">
            <a href="contas" class="link">Contas</a>
        </section>
        <section class="links">
            <a href="feedbacks/" class="link">Feedbacks</a>
        </section>
        </td></tr></table>
    </article>
    
    <!-- RODAPÉ -->
	
	<footer>
        <section>
            <ul>
                <h3>Seções</h3><br>
                <li><a href="../#sobre">Sobre</a></li>
                <li><a href="../#download">Download</a></li>
                <li><a href="../#feedback">Feedback</a></li>
                <li><a href="../#ajuda">Ajuda</a></li>
            </ul>

		   	<ul>
				<h3>Sistema</h3><br>
				<li><a href='feedbacks'>Feedbacks</a></li>
				<li><a href='contas'>Contas</a></li>
				<li>&nbsp;</li>
				<li><a href="../ranking">Ranking</a></li>
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