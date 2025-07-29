<?php
	
	
	// Exercício 1:
	
	echo 'EXERCÍCIO 1: Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. 
A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".';
	
	//Escolha um número para os exercícios 1, 2, 3, 5, 6 e 7.
	$num = -5;
	
	echo "\n\nNúmero $num.\n";
	if ($num>0){
	  echo "Valor Positivo.\n\n";
	}
  else if ($num<0){
    echo "Valor Negativo.\n\n";
  }
  else {
    echo "Igual a Zero!\n\n";
  }
  
  // Exercício 2:
  
  echo  "EXERCÍCIO 2: Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado.
 \n";
  
  echo "Tabuada de $num:\n";
  
  for ($i=0; $i<=10 ; $i++ ){
    $resultado = $num * $i;
    echo "- $num x $i = $resultado \n";
  } 
  
  // Exercício 3
  echo "\n";
  echo "EXERCÍCIO 3: Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela.  \n";
  
  function fatorial ($numero){
    if ($numero <=1){
      return 1;
    }else{
     return $fatorial = $numero * fatorial($numero-1);
    }
  }
  $resultado = fatorial($num); //sobrescreveu resultado aqui!!!
  
  echo "\nO fatorial de $num é $resultado. \n\n";
  
  echo "Exercício 4 não existe!!! \n\n";
  
  // Exercício 5
  echo "EXERCÍCIO 5:  Solicite a entrada de um número e descubra se o número digitado é par ou ímpar. \n";
  if($num%2 == 0){
    echo "\nO número $num é par.\n\n";
  }
  else{
    echo "\nO número $num é ímpar.\n\n";
  }
  
  // Exercício 6
  echo "EXERCÍCIO 6: Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores.\n\n";
  $A = $num;
  $B = 1;
  
  $array = [$A, $B, 3, 45, 60, 12, 4, 78, 47, 23, 64];
  sort ($array);
  $index = count($array)-1;
   $i=0;
   
  echo "O número A é $A e o número B é $B!!! \n";
  
  echo "A ordem crescente de todos é ";
 
  foreach ($array as $valores){
    if($i==0){
      echo "$valores, ";
    }
    else if($i == $index){
      echo "$valores.\n\n";
    }
    else if($i==$index -1){
      echo "$valores e ";
    }
    else{
      echo "$valores, ";
    }
    $i++;
  }
 
  
  // Exercício 7
  
  echo "EXERCÍCIO 7: Faça um algoritmo em PHP que verifique se o valor da variável A é maior ou menor que o valor da variável B.  \n";
  
  if($A>$B){
    echo "\n$A é maior que $B.\n\n";
  }
  else if($A<$B){
    echo "\nO número $A é menor que $B.\n\n";
  }else{
    echo "\nOs números a e b são iguais.\n\n";
  }
  
  //Exercício 8
  
  echo 'EXERCÍCIO 8: Crie um algoritmo para calcular a média final de um aluno. Para isso, solicite a entrada de três notas e as insira em um array.  
Por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba "Aprovado", caso contrário, exiba "Reprovado".  
Exiba também a média final calculada.';
  
  $nota1 = 5;
  $nota2 = 6;
  $nota3 = 8;
  $notasProvas = [$nota1, $nota2, $nota3];//array criado para corrigir o erro no $soma = array_sum nao ser número.
  $notas = [number_format($nota1, 2, ",",""), number_format($nota2, 2,",",""), number_format($nota3, 2,",","")];
  $textoNotas = ["nota 1", "nota 2", "nota 3"];
  $soma = array_sum($notasProvas);
  $media = $soma/count($notas);
  $mediaFormatada = number_format($media, 2, ",", "");
  $a=0;
  echo "\n\nA média das notas ";
  foreach($notas as $value){
    if($a<count($notas)-2){
      echo "$textoNotas[$a]($value), ";
    }
    else if($a==count($notas)-2){ //Regra para incluir "e" após o penúltimo número
      echo "$textoNotas[$a]($value) e";
    }else{
    echo " $textoNotas[$a]($value) é $mediaFormatada.";
    }
    $a++;
  }
  

  
  if($media>=6){
    echo "\nAprovado!\n\n";
  }else{
    echo "REPROVADO!\n\n";
  }
  
  //Exercício 9
  
  echo "EXERCÍCIO 9:  Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida, verifique se a idade é maior ou menor que 18.  \n";
  
  $idade = 15;
  
  if($idade>18){
    echo "\nVocê é maior de 18 e tem $idade anos.\n\n";
  }else if($idade<18){
    echo "\nVocê é menor de 18 e tem $idade anos.\n\n";
  }
  else{
    echo "\nVocê tem 18 anos.\n\n";
  }
  
  //Exercício 10
  
  echo 'EXERCÍCIO 10: Ler um número inteiro entre 1 e 12 e escrever o mês correspondente.  
Caso o número seja fora desse intervalo, informar que não existe mês com este número.';
  
  $mes = 11;
  $nomesDosMeses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
  $indexMes = $mes-1;
  
  date_default_timezone_set('America/Sao_Paulo');
  
  $dia = date("d");
  $mesIndex = intval(date("m"))-1;  //Pega o número do mês e retira os zeros a esquerda para usar com index de $nomesDosMeses
  $ano = date("Y");
  $hora = date("H:i A");
  
  echo "\n\nO mês $mes é $nomesDosMeses[$indexMes].\n\n";
  echo "$dia de $nomesDosMeses[$mesIndex] de $ano, ".$hora;  
	
?>