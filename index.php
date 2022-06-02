<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Biblioteca</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="description" content="Site de desenvolvimento da biblioteca IFRP sudeste mg.">

    <?php

    if (isset($_GET['alert'])) { //script que verifica se vai ter algum alerta na tela, se houver, emite o alerta com JS
        echo "<script type='text/javascript'>
            window.alert(" . $_GET['alert'] . ");
        </script>" ;
    }

    ?>



  </head>
  <body bgcolor="#764924" text="white">

    <header class="cabeçalho">
      <img class="cabeçalho-imagem" src="logo.png" alt="Logo IFRP">
      <nav class="cabeçalho-menu">
        <a class="cabeçalho-menu-item" href="login.html">Login</a>
        <a class="cabeçalho-menu-item" href="FormularioCad.html">Cadastrar</a>
        <a class="cabeçalho-menu-item">Contato</a>
      </nav>

    </header>

        <main class="conteudo">
          <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
              <h1 class="conteudo-principal-escrito-titulo"> Biblioteca</h1>
              <h2 class="conteudo-principal-escrito-subtitulo">Site de desenvolvimento da biblioteca IFRP sudeste mg.</h2>
              <a href="FormularioCad.html">
            <button class="conteudo-principal-escrito-botao" type="button" name="Cadastrar">Cadastrar</button>
          </a>
            </div>
            <img class="conteudo-principal-imagem" src="bibli.png" alt="imagem biblioteca">
          </section>

          <section class="conteudo-secundario">
            <h3 class="conteudo-secundario-titulo">Qual o objetivo?</h3>
            <p class="conteudo-secundario-paragrafo">Este site tem como principal função ser uma <strong>biblioteca</strong>.</p>
            <p class="conteudo-secundario-paragrafo">Para fazer uso do sistema primeiramente deve realizar seu <strong>cadastro</strong> clicando no botão.</p>
            <p class="conteudo-secundario-paragrafo">Depois de realizar o cadastro clique em <strong>Login</strong> para prosseguir.</p>
          </section>
            </main>
            <footer class="rodape">
              <center>Copyright © 2022-2022 </center>
              </footer>
  </body>
</html>
