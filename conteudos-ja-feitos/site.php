<?php
echo '<h1>Resultado do formulário</h1>';
$pnome = $_POST['pnome'];
$snome = $_POST['snome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$rgcpf = $_POST['rgcpf'];
$end = $_POST['end'];
$numcasa = $_POST['numcasa'];
$select = $_POST['select'];
$livros = $_POST['livros'];
$coment = $_POST['coment'];
$genero = $_POST['genero'];
$condicao = $_POST['condicao'];
echo '<p>Seu nome é:</p>';
echo $pnome;
echo '<p>Seu sobrenome é:</p>';
echo $snome;
echo '<p>Seu número de telefone é:</p>';
echo $telefone;
echo '<p>Seu email é:</p>';
echo $email;
echo '<p>Seu RG ou CPF é:</p>';
echo $rgcpf;
echo '<p>O endereço de entrega é:</p>';
echo $end;
echo '<p>O numero da sua casa é:</p>';
echo $numcasa;
echo '<p>A faixa de preço escolhida é:</p>';
echo $select;
echo '<p>O tipo de livro escolhido é:</p>';
echo $livros;
echo '<p>Seu comentário foi:</p>';
echo $coment;
echo '<p>O seu gênero escolhido foi:</p>';
echo $genero;
echo '<p>A condição escolhida foi:</p>';
echo $condicao;
?>