<!DOCTYPE html>

<html lang="pt-br">
  <head> 
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - Desenvolvimento Web Dinâmico</title>

    <link rel="stylesheet" type="text/css" href="style_form.css">
  </head>

   <body>
     <header id="estilo_topo">
        <a href="index.php">
		       <h2 id="estilo_nomesite_topo"><b>registration vans</b></h2>
        </a>
       
        <a href="https://portal.cmp.ifsp.edu.br">
		       <img id="estilo_logoif_topo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/IFSP_Logo.jpg/640px-IFSP_Logo.jpg" alt="Logo do IFSP">
        </a>
     </header>

     <div id="texto">
      <?php
         if(count($_POST)){
            $nome_m = $_POST["nome_m"];
            $modelo_c = $_POST["modelo_c"];
            $placa_c = $_POST["placa_c"];
            $cpf_m = $_POST["cpf_m"];
           
            if($nome_m == "" || $modelo_c == "" || $placa_c == "" || $cpf_m == ""){
              echo "<p>ERRO: Há dados que não foram inseridos.</p>";
              echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
              exit(1);
            }
            else{
              // Verificação da placa do veículo (número de digitos)
              if(strlen($placa_c) != 7){
                echo "<p>ERRO: Digite um valor válido para a placa do veículo.</p>";
                echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
                exit(1);
              }
              // Verificação dos digitos da placa do veículo
              else if((!(ctype_alpha(substr($placa_c, 0, 3)))) || (!(ctype_digit(substr($placa_c, 5, 7)))) || (!(ctype_digit($placa_c[3])))){
                echo "<p>ERRO: Digite um valor válido para a placa do veículo.</p>";
                echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
                exit(1);
              }

              if(ctype_alpha($cpf_m)){
                echo "<p>ERRO: Digite um valor válido para o CPF.</p>";
                echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
                exit(1);
              }

              // Soma dos digitos do CPF para verificação
              
              $soma = 0;
              $aux = $cpf_m;
              
              for($i = 0; $i<strlen($cpf_m); $i++){
                if($cpf_m[$i] == '-' || $cpf_m[$i] == '.'){
                  $aux = str_replace($cpf_m[$i], "", $cpf_m);
                  continue;
                }

                $soma += $cpf_m[$i];
              }

              $cpf_m = $aux;
              
              //Verificação do CPF
              if(strlen($cpf_m) != 11){
                echo "<p>ERRO: Digite um valor válido para o CPF.</p>";
                echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
                exit(1);
              }
              //Verificação dos dígitos do CPF
              else if($soma != 44 && $soma != 55 && $soma != 66){
                echo "<p>ERRO: Digite um valor válido para o CPF.</p>";
                echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
                exit(1);
              }
            }
              
              echo "Usuário cadastrado!";
              echo "<p style='font-weight: bold;'>Nome do motorista: ",$nome_m;
              echo "<br>Modelo do transporte utilizado: ",$modelo_c;
              echo "<br>Placa do veículo: ",$placa_c;
              echo "<br>CPF do transportador: ",$cpf_m,"</p>";
          }
          else{
            echo "<p>ERRO: Há dados que não foram inseridos.</p>";
          }

          echo "<form method='POST' action='index.php'> <button type='submit' id='submit'>Voltar para a tela inicial</button></form>";
      ?>
    </div>

     <footer id="estilo_rodape">
	   	  <p>registration vans 2023</p>
	   	  <h6>Desenvolvido por: André Takeo Miiada Caseiro & Gabriel Fernandes Matozinhos</h6>
     </footer>
   </body>
</html>