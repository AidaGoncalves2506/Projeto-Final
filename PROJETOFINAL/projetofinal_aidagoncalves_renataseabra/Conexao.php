<?php

$usuario="root";
$senha="";
$database="sitehango";
$host="localhost";
$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli-> error) {
    die("Falha ao conectar:". $mysqli->error);
}
session_start(); // Inicia a sessão
if (isset ($_POST["email"]) || isset ($_POST['senha']))  {

        if (strlen($_POST['email']) == 0) {
            echo "Preencha o seu email";
} else if (strlen($_POST["senha"]) == 0) {
            echo "Preencha a sua senha";
} else {

    $email = $mysqli->real_escape_string($_POST["email"]);
    $senha = $mysqli->real_escape_string($_POST["senha"]);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL:" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

if ($quantidade == 1) {

     $usuario = $sql_query-> fetch_assoc();

     if(isset($_SESSION)) {
        session_start();

     }
     $_SESSION['id'] = $usuario['id'];
     $_SESSION['nome'] = $usuario['nome'];

     header ('Location: painel.php');
} else {
    echo "Falha ao logar! Email ou senha incorretos";


        }
    }
}