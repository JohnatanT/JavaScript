<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>

	<!-- Estrutura JavaScript -->
	<script type="text/javascript">
		
		/*  Variaveis */

		//string
		var texto = 'Aula de JavaScript';

		//float
		var numeroFracionado = 10.7;

		//int
		var numero = -7;

		//boolean
		var teste = true; 

		//Saida de textos
		document.write(texto);
		//ou
		console.log(texto);
		//ou
		alert(texto);



		/* Concatenação */
		var texto1 = 'JavaScript';
		var texto2 = 'Curso';
		//Concatenação  +
		document.write(texto1 + texto2);

		//Recebendo dados do usuario
		var texto3 = prompt("Digite seu nome: ");


		/*  Array */
		var lista_frutas = Array('Banana','Maça','Uva');


		/* Array Multidimensionais */
		var lista_coisas = Array();
		lista_coisa['frutas'] = array('Banana','Maça','Morango');
		lista_coisa['pessoas'] = array('Joao','Maria','José');


		
		/* Estrutua de controle If e Else */

		//Operadores condicionais
		// ==
		// ===
		// != <>
		// !==
		// <
		// >
		// <=
		// >=

		//Operadores Lógicos
		// &&
		// ||
		// !

		if(condicao){

		}else{

		}
		//ou 
		if(condicao){

		}else if(condicao2){

		}else{

		}


		/*  Switch */
		var opcao = 1;
		switch(opcao){
			case 1:
				document.write('Opcao 1 selecionada');
				break;
			case 2:
				document.write('Opcao 2 selecionada');
				break;
			default:
				document.write('Nenhuma opcao');
		}


		/* Operadores Aritimeticos */

		// + adição
		// - Subtração
		// * Multiplicação
		// / Divisão
		// % Modulo
		// ++ Pré/pós Incremento
		// -- Pré/pós Decremento


		/* Estrutura de repetição */

		//While
		var x = 1;
		while( x <= 10 ){
			document.write(x + '<br/>');
			x++;
		}

		//Do While
		var x = 1;
		do{
			document.write('Executa pelo mennos uma vez');
			x++;
		} while(x <= 10);

		//For
		for(var x = 1; x < 11, x++){
			document.write('Estrutura de repetição for');
		}

		//Funções
		function calcularAreaTerreno(largura, comprimento){
			var area = largura * comprimento;
			return area;
		}
		var somaArea = calcularAreaTerreno(20,15);
		document.write("O terreno possui" + somaArea + "mestros quadrados.")


	</script>


	<!-- Evento JavaScript -->
	<script type="text/javascript">

		/* Eventos a partir do mouse */

		//onclick --> aciona no clique do mouse
		//ondblclick --> aciona no clique duplo do mouse
		//onmousedown --> aciona no clique do mouse(soltando ou não o botão)
		//onmouseover --> acionado quando cursos do mouse sobrepoe o elemento da página
		//onmouseout --> acionado quando o cursos do mouse sai da area de um elemento da página


		/* Eventos a partir do teclado */

		//onkeydown --> acionado no momento em que uma tecla é pressionada(soltando ou não a tecla)
		//onkeypress --> acionado no momento em que uma tecla é pressionada(soltando-a ou não), porém não captura todas as teclas, como por exemplo alt,ctrl, esc, shift, etc.
		//onkeyuo --> acionada no momento em que a tecla pe liberada
	</script>
	


</body>
</html>