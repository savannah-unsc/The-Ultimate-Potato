<?php

   include_once("conexao_musarte.php");

   $nome = $_POST["nome"];
   $artista = $_POST["artista"];
   $ano = $_POST["ano"];
   $estilo = $_POST["estilo"];
   $imagem = $_FILES["imagem"];

   if($imagem != NULL) {
  $nomeFinal = time().'.jpg';
  }

   if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {

     $tamanhoImg = filesize($nomeFinal);
     $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
   }


   $sql = "INSERT INTO obras (nome, artista, ano, estilo, imagem) values ('$nome','$artista','$ano','$estilo','$imagem')";
   $query = mysqli_query ($conn,$sql) or die ("Erro");

   if (mysqli_affected_rows($conn)){
	   echo "<script> window.alert('Novo registro inserido com sucesso) </script>";
	   echo " <script> location.href='cadastrar_obrass.html' </script> ";
   }

   else{
	   echo "<script> window.alert('Erro ao cadastrar obra') </script>";
	   echo " <script> location.href='cadastrar_obrass.html' </script> ";
   }
?>
