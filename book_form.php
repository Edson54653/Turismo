<?php

$connection = mysqli_connect('localhost','root', '','book_db');

if (isset($_POST['enviar'])) {
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $indereco=$_POST['indereco'];
    $locali=$_POST['locali'];
    $visitante=$_POST['visitante'];
    $saida=$_POST['saida'];
    $chegada=$_POST['chegada'];

    $request= "INSERT INTO  form_book(nome,email,telefone,indereco,locali,visitante,chegada,saida)

    VALUES ('$nome','$email','$telefone','$indereco','$locali','$visitante','$chegada','$saida')";

    mysqli_query($connection,$request);

    header('location:book.php');

}else{
    echo "Something went wronf try again later";
}