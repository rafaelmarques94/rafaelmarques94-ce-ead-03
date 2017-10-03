<?php
   $nome = $_POST['Aluno'];
   $disciplina = $_POST['Disciplina'];
   $curso = $_POST['Curso'];
   $logo = $_POST['logo'];
   $va1 = $_POST['va1'];
   $va2 = $_POST['va2'];
   $va3 = $_POST['va3'];
   $trabalhos = $_POST['trabalhos'];
   $professor = $_POST['professor'];
   $coordenador = $_POST['coordenador'];
   
   $total = $va1 + $va2 + $va3 + $trabalhos;
   
   if ($total >= 60){
	   $concluiu = "concluiu";
   }
   else{
	   $concluiu = "Não Concluiu";
   }
   if ($total >= 90 ){
	   $desempenho = 'Excelente';
   } 
   else if ($total >= 80){
	   $desempenho = 'Ótimo';
   }
   else if ($total >= 70){
	   $desempenho = 'Bom';
   }
    else if ($total >= 60){
	   $desempenho = 'Ruim';
   }
    else if ($total < 60){
	   $desempenho = 'Péssimo';
   }
   
   $desva1 = ($va1 / 15 )* 100;
   
   $desva2 = ($va2 / 25 )* 100;
   
   $desva3 = ($va3 / 35 )* 100;
   
   $destrab = ($trabalhos / 20 )* 100;
   
   $hoje = date("d/m/Y");
   ?>
       
   <html>
		<head>
			<meta charset = 'utf-8'>
			<title> 
				Trabalho EAD 03 
			</title>
			
			<style>
				
				.titulo{
					text-align : center;
						}
				#img {
					display: block;
					margin-left: auto;
					margin-right: auto;
						}
				#tabela {
					margin: 0 auto;
				}
				.corpo{
					text-align : center;
				}
				hr{
					width: 30%;
				}
			</style>
		</head>
		<body class="corpo">
		
		  <img id="img" src="<?php echo $logo ?>" > <br>
		<h1 class="titulo">Declaração</h1>
			
<div>
				Declaramos, para os devidos fins, que <?php echo $nome ?> <?php echo $concluiu ?> satisfatoriamente as atividades da disciplina <?php echo $disciplina ?> do curso de <?php echo $curso ?>
				<br>
				<br>
				Segue o desempenho de <?php echo $nome ?>:
				<br>
				<br>
	<table id="tabela" border="4px ">
		<th>Critério</th>
		<th>Valor Total</th>
		<th>Nota do Aluno</th>
		<th>Desempenho</th>
			<tr>
				<td>Prova 1</td>
				<td>15</td>
				<td><?php echo $va1 ?></td>
				<td><?php echo round ($desva1,2); ?>%</td>
			</tr>
				<tr>
					<td>Prova 2</td>
					<td>25</td>
					<td><?php echo $va2 ?></td>
					<td><?php echo round ($desva2,2); ?>%</td>
			</tr>
			<tr>
					<td>Prova 3</td>
					<td>35</td>
					<td><?php echo $va3 ?></td>
					<td><?php echo round ($desva3,2); ?>%</td>
			</tr>
			<tr>
					<td>Trabalhos</td>
					<td>20</td>
					<td><?php echo $trabalhos ?></td>
					<td><?php echo round ($destrab,2); ?>%</td>
					</tr>
	</table>
				<br> 
				Com este resultado, o conceito de <?php echo $nome ?> foi <?php echo $desempenho ?>, já que sua nota total foi de <?php echo $total ?> pontos. 
				<br> 
				<br>
				Belo Horizonte, <?php echo $hoje ?>
				<br> 
				<br>
				<hr> 
				<?php echo $professor ?>, Professor(a)
				<br> 
				<br>
				<hr> 
				<?php echo $coordenador ?>, Coordenador(a)
				
</div>
			
			
		</body>
	
	</html>
