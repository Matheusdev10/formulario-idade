<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    a{
      display:flex;
      font-size: 15px;
     text-decoration:none;
     margin-top: 10px;
     color: red;
   
    }
   
  </style>
</head>
<body>

<div>
<?php

$nome = isset ($_GET["nome"]) ?$_GET["nome"] : "[não informado]";
$ano = isset ($_GET["ano"]) ?$_GET["ano"] : 0;
$sexo =isset ($_GET["sexo"]) ?$_GET["sexo"] : "[sem sexo]";
$idade = date("Y") - $ano;
echo "$nome é $sexo e tem $idade anos";
?>



</div>
<a href = "index.php">VOLTAR</a>

  
</body>
</html>