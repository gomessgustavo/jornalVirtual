
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
             <form action="" method="post" name="form" class="contato_form">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="text">
                <label for="telefone">Telefone</label>
                <input id="telefone" name="telefone" type="text">
                <br/> <br/>
                <br/> <br/>
            
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem"></textarea>
                
                <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
            </form>
        </div>
          <div class="rodape">
              <p>WebMaster: Gustavo</p>
              </div>
    </body>
</html>