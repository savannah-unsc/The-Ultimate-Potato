<?php

   include_once("conexao_musarte.php");

   $sql = "select * from obras";

   ?>

   <!DOCTYPE html>
   <html lang="pt-br" dir="ltr">
   <head>
   <meta name = "viewport" content = "initial-scale=1.0">
   <meta charset="utf-8">
   <link rel="stylesheet" href="ism/css/listra.css">
   <title> PMusic - Player </title>
   </head>
   <body>
   <div id="corpo">

   <div id="nome"> Nome </div>
   <div id="artista"> Artista </div>
   <div id="ano"> Ano </div>
   <div id="estilo"> Estilo </div>

   <?php
   $result=mysqli_query($conn,$sql);
   while($tabela=mysqli_fetch_array($result))
   {

   $nome = $tabela["nome"];
   $artista = $tabela["artista"];
   $ano = $tabela["ano"];
   $estilo = $tabela["estilo"];

   echo "<div class='artista'> $nome </div>";
   echo "<div class='musica'> $artista </div>";
   echo "<div class='album'> $ano </div>";
   echo "<div class='ano'> $estilo </div>";
   }
   ?>
   </div>

   <br>
   <center> <a href="index.html" id="btn_voltar"> Voltar para o Inicio </a> </center>

   </body>
   </html>
