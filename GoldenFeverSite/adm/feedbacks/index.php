<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Feedbacks - Golden Fever</title>
    
    <meta charset="utf-8">
	<meta name="author" content="Emperor Arts">
	<meta name="generator" content="Dreamweaver">
	<meta name="description" content="Feedbacks dados por usuários">
	<meta name="application-name" content="Golden Fever">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="../../Estilos/comum.css">
    <link rel="stylesheet" href="../../Estilos/rodape.css">
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
		
		.feedback
		{
			border: solid 3px goldenrod;
			width: 300px;
			height: 430px;
			margin: 10px;
			padding: 10px;
			box-sizing:border-box;
			transition: 0.3s;
			display: inline-block;
			overflow: hidden;
			box-sizing: border-box;
			cursor: default;
		}
		
		.feedback:hover
		{
			box-shadow: 0px 10px 20px #999;
			transform: scale(1.05);
		}
		.containerFeedbacks
		{
			width: calc(100% - 40px);
			margin: 0;
			margin-bottom: 20px;
			padding: 20px;
			box-sizing: border-box;
		}
		
		p
		{
			height: 150px;
			border: 3px solid goldenrod;	
			padding: 5px;
			overflow-y: scroll;
			box-sizing: border-box;
			word-wrap: break-word;
		}
		
		h4
		{
			height: 34px;
		}
		
		h2
		{
			height: 52px;
		}
		
		input
		{
			height: 40px;
			width: 100px;
			margin-top: 20px;
			background-color: goldenrod;
			border: none;	
			font-family: Pixel;
			cursor: pointer;
			font-size: 16pt;
			transition: 0.3s;
		}
		
		input:hover
		{
			color: #FFF;
		}
		
		a
		{
			text-decoration: none;
			color: goldenrod;
			cursor: pointer;
		}

		a:active
		{
			text-decoration: none;
			color: goldenrod;
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
            <img src="../../Imagens/tocha.gif" alt="Tocha" class="tocha" id="esquerda">
            
            <div class="divLogo">
                <a href="../../">
                    <img src="../../Imagens/Logo.png" alt="Logo The Emperor Tomb">
                </a>
            </div>
                
            <img src="../../Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">
        </ul>
    </nav>
	<?php
        require('../../connect.php');
        
        $lista = mysqli_query($con, "Select * from `tbl_feedback`");
    
		$nome = array();
		$email = array();
		$titulo = array();
		$mensagem = array();
		$tipo = array();
		$id = array();

		echo "<div class = 'containerFeedbacks'>";
		echo "<table width='100%'><tr><td align='center'>";

		while($feedb = mysqli_fetch_array($lista))
		{
			array_push($nome, $feedb['nome']);
			array_push($email, $feedb['email']);
			array_push($titulo, $feedb['titulo']);
			array_push($mensagem, $feedb['mensagem']);
			array_push($tipo, $feedb['tipo']);
			array_push($id, $feedb['id']);
		}

		$nomeReverso = array_reverse($nome);
		$emailReverso = array_reverse($email);
		$tituloReverso = array_reverse($titulo);
		$mensagemReverso = array_reverse($mensagem);
		$tipoReverso = array_reverse($tipo);
		$idReverso = array_reverse($id);

		for ($i=0; $i < count($mensagem); $i++) 
		{ 
				echo 	"<div class = feedback id='feedback$idReverso[$i]'>
							<form id= 'form$idReverso[$i]' method='POST' action='excluir.act.php'>
								<input type='hidden' name='id' value= '$idReverso[$i]'>
								<h4>$nomeReverso[$i] <br> $emailReverso[$i]</h4>
								<h2>$tituloReverso[$i]</h2>
								<p>$mensagemReverso[$i]</p>
								<h3>$tipoReverso[$i]</h3>
								<input type='submit' value=Excluir>
							</form>
                            <!--<script>
                                $('#form$idReverso[$i]').submit(function(e) {
                                    e.preventDefault;
                                    var formulario = $(this);
                                    var retorno = inserirFormulario(formulario);

                                    function inserirFormulario(dados) {
                                        $.ajax({
                                            type:'POST',
                                            data:dados.serialize(),
                                            url:'excluir.php',
                                            async:false
                                        }).then(sucesso,falha);

                                        function sucesso(data){
                                            console.log(data);
                                            alert('Feedback excluído com sucesso!');
                                            $('#containerFeedbacks').html(div);
                                        }

                                        function falha(){
                                            console.log('erro');
                                            alert('Ocorreu um erro!');
                                        }
                                    }

                                    return false;
                                });
                            </script>-->
						</div>";
		}

		echo "</td></tr></table>";
		echo "</div>";
    ?>
    
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
				<li><a href='./'>Feedbacks</a></li>
				<li><a href='../contas'>Contas</a></li>
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
	
</body>
</html>
