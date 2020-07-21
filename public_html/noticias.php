
<html lang="pt-br">
  <head>
    <title>Jornal Nacional</title>
    <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="geral">
        <header>
            <div class="topo">
                <img src="../img/header.jpg" alt="Header">
                <div class="menu">
                    <ul>
                        <li><a href="jornal.html">Início</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="tempo.php">Tempo</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                
            </div>
        </header>      
        <div class="conteudo">
              <?php
              $noticias = fopen ('arq.txt', 'r');
              while(!feof($noticias)){
                  $linha = fgets($noticias, 1024);
                  echo $linha.'<br />';
              }
              fclose($noticias);
?>
        </div>
          <div class="rodape">
              <p>WebMaster: Gustavo</p>
              </div>
    </body>
</html>