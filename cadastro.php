<!DOCTYPE html>

<html lang="pt-br">
	<head>
		
		<meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Projeto - Desenvolvimento Web Dinâmico</title>

    <link rel="stylesheet" type="text/css" href="style_cadastro.css">
	</head>

	<body>

		
			<header id="estilo_topo">

        <a href="index.php">
				  <h2 id="estilo_nomesite_topo"><b>registration vans</b></h2>
        </a>

        <a href="https://portal.cmp.ifsp.edu.br">
          <img id="estilo_logoif_topo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/IFSP_Logo.jpg/640px-IFSP_Logo.jpg" alt="Logo do IFSP">
        </a>

        <nav>
		  	   <a id="primeira_opcao" href="cadastro.php">Cadastrar perueiro</a>
		  	   <a id="segunda_opcao" href="index.php">Tela inicial</a>
		  	   <a id="terceira_opcao" href="informacoes.php">Informações da página</a>
        </nav>
        
			</header>
	
		
		
			<div id="estilo_cadastro">
			
				<hr>
				
				<div id="estilo_cadastro_texto">
				
					<h1>CADASTRAR PERUEIRO</h1>
					
					<form method="POST" action="form.php">
				  	<p>Preencha os campos abaixo:</p>
					
				  	<label for="nome_m">Nome do motorista que será cadastrado:</label>
				  	<input type="text" id="nome_m" name="nome_m"><br>
					
				  	<label for="modelo_c">Modelo do transporte utilizado:</label>
				  	<input type="text" id="modelo_c" name="modelo_c"><br>

				  	<label for="placa_c">Placa do veículo:</label>
				  	<input type="text" id="placa_c" name="placa_c"><br>

				  	<label for="cpf_m">CPF do transportador: </label>
				  	<input type="text" id="cpf_m" name="cpf_m"><br><br>

					
				  	<input type="submit" id="submit">
				  </form>
				
				
				</div>
				
				<hr style="position:relative; top:473px;">
				
			</div>
	
	
			<footer id="estilo_rodape">
				<p>registration vans 2023</p>
				<h6>Desenvolvido por: André Takeo Miiada Caseiro & Gabriel Fernandes Matozinhos</h6>
			</footer>
	
	</body>

</html>
