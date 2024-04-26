<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Login  - Golden Fever</title>
    
    <meta charset="utf-8">
	<meta name="author" content="Emperor Arts">
	<meta name="generator" content="Dreamweaver">
	<meta name="description" content="Página de login do sistema Golden Fever">
	<meta name="application-name" content="Golden Fever">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../../Estilos/comum.css">
	<link rel="stylesheet" href="../../Estilos/elementos.css">
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
            font-family: Pixel, "sans serif";   
        }
        
        .formularios
        {
            width: 300px;
            height: 500px;
            margin: 15px;
            border: 3px solid goldenrod;
            text-align: center;
            display: inline-block;
            box-sizing: border-box;
            overflow: hidden;
        }
        
        .formularios:nth-child(2)
        {
            height: 300px;
            margin-bottom: 100px;
        }
        
        h2
        {
            margin: 20px 0;
        }
        
        table
        {
            margin: 50px 0;
        }
        
        .input
        {
            height: 50px;
            width: 250px;
            margin: 15px 20px;
            box-sizing: border-box;
            position: relative;
            font-size
        }
        
        .input input
        {
            height: 50px;
            width: 250px;
            border: 3px solid goldenrod;
            box-sizing: border-box;
            padding-left: 9px;
            font-size: 14pt;
            font-family: Pixel, "sans serif";
        }
        
        .input span
        {
            position: absolute;
            top: 14px;
            left: 14px;
            padding: 0;
            margin: 0;
            color: goldenrod;
            font-size: 18pt;
            pointer-events: none;
            background-color: #FFF; 
            transition: 0.3s;
        }
        
        .input input:focus ~ span, .input input:valid ~ span
        {
            top: -10px;
            left: 3px;
            font-size: 16pt;
        }
        
        .submit
        {
            height: 50px;
            width: 150px;
            margin: 15px 0;
            border: none;
            background-color: goldenrod;
            box-sizing: border-box;
            font-family: Pixel, "sans serif";
            font-size: 16pt;
            cursor: pointer;
            text-align: center;
            transition: 0.3s;
        }
        
        .submit:hover
        {
            color: #FFF;
        }
    </style>
    
    
</head>
<body>
    
    <!-- Barra de Navegação -->

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
					<img src="../../Imagens/Logo.png" alt="Logo Golden Fever">
				</a>
			</div>
			
			<img src="../../Imagens/tocha.gif" alt="Tocha" class="tocha" id="direita">
		</ul>
		
		<ul id="mobile">
			<li class="mobile">
				<a href="../../">
					Página Inicial
				</a>
			</li>
		</ul>
	</nav>
    
    <!-- SEÇÕES DE LOGIN -->
    
    <table width="100%"><tr><td align="center">
        <section class="formularios">
            <form id="formCadastro"  action="cadastrar.act.php" method="post">
                <h2>Cadastrar</h2>
                <div class="input">
                    <input type="text" name="nome" maxlength="30" required>
                    <span class="label">Nome</span>
                </div>
                <div class="input">
                    <input type="email" name="email" maxlength="40" required>
                    <span class="label">Email</span>
                </div>
                <div class="input">
                    <input type="text" name="username" maxlength="25" required>
                    <span class="label">Username</span>
                </div>
                <div class="input">
                    <input type="password" name="senha" maxlength="50" required>
                    <span class="label">Senha</span>
                </div>
                <div class="input">
                    <input type="date" name="data_nasc" required>
                    <span class="label">Data de Nascimento</span>
                </div>
                
                <input type="submit" name="cadastrar" value="Cadastrar" class="submit">
           </form>
        </section>

        <section class="formularios">
            <form id="formLogin"  action="login.act.php" method="post">
                <h2>Logar</h2>
                <div class="input">
                    <input type="text" name="username" maxlength="25" required>
                    <span class="label">Username</span>
                </div>
                <div class="input">
                    <input type="password" name="senha" maxlength="50" required>
                    <span class="label">Senha</span>
                </div>
                
                <input type="submit" name="logar" value="Login" class="submit">
            </form>
        </section>
    </td></tr></table>
    
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
    
    <!--
    <script>
		$('#formCadastro').submit(function(e) {
			e.preventDefault;
			var formulario = $(this);
			var retorno = inserirFormulario(formulario);

			function inserirFormulario(dados) {
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"cadastrar.act.php",
					async:false
				}).then(sucesso,falha);

				function sucesso(data){
					console.log(data);
					alert("Cadastro feito com sucesso! \nBem Vindo! ;)");
                    //location.href="../";
				}

				function falha(){
					console.log("erro");
					alert("Ocorreu um erro!\n\nNos desculpe, resolveremos assim que possível");
				}
			}

			return false;
		});
	</script> 
    
    <script>
		$('#formLogin').submit(function(e) {
			e.preventDefault;
			var formulario = $(this);
			var retorno = inserirFormulario(formulario);

			function inserirFormulario(dados) {
				$.ajax({
					type:"POST",
					data:dados.serialize(),
					url:"login.act.php",
					async:false
				}).then(sucesso,falha);

				function sucesso(data){
                    location.href="../";
				}

				function falha(){
					console.log("erro");
					alert("Ocorreu um erro!\n\nNos desculpe, resolveremos assim que possível");
				}
			}

			return false;
		});
	</script> 
-->

</body>
</html>
