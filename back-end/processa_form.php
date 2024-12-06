<?php
// print_r($_GET);
$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo '<h1>Dados do Usuário</hz>';
echo '<hr>';
echo "<p>O usuário $nome tem $idade amos.</p>";

echo '<a href="https://localhost/udesc/projeto-web/index.html"><button>Home Page</button></a>';
echo '<button type="button" onclick="javascript:history.bach()">Voltar</button>';
echo '<button onclick="window.location.href=\'https:\\\\www.udesc.com.br\'">Vai para Udesc</button>';
?>