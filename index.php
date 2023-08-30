<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
<h1 align="center
">Calculadora:</h1>
<fieldset>
    <legend align="center"><b>Cálculo:</b></legend>
   <form align="center" action="" method="post">
    <p><input type="number" name="n1" id="" placeholder="digite um numero"></p>
    <p><input type="number" name="n2" id="" placeholder="digite um numero"></p>
    <fieldset>
    <legend>Escolha a operação:</legend>
  <input type="checkbox" name="somar" id="">somar
  <input type="checkbox" name="subtrair" id="">subtrair
  <input type="checkbox" name="multiplicar" id="">multiplicar
  <input type="checkbox" name="dividir" id="">dividir
    </fieldset>
    <p><input type="submit" value="calcular"></p>
    </form>
    <?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
if(isset($_POST['somar'])){
  $resultado =  $n1+$n2; 
}
if(isset($_POST['subtrair'])){
    $resultado =  $n1-$n2; 
  }
  if(isset($_POST['multiplicar'])){
    $resultado =  $n1*$n2; 
  }
  if(isset($_POST['dividir'])){
    $resultado =  $n1/$n2; 
  }
?>
<p align="center">Resultado:<input type="number" name="" value="<?=$resultado?>" id=""></p>
</fieldset>   
</body>
</html>