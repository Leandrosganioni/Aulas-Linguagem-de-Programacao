<?php

declare(strinct_types = 1);

require_once("../config/bancodedados.php");

function login(string $email, string $senha){
    global $pdo;

    //inserção de user adm
    $stament =
        $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com");
    $usuario = $stament -> fetchALL(PDO::FETCH_ASSOC);
    //verificar se o usuario não existe, se não existir, vamos criar
    if ($usuario){
        $senha = password_hash('adm', PASSWORD_BCRYPT);
        $stament = $pdo->prepare('INSERT INTO usuario (nome,email,senha,nivel) VALUES (?,?,?,?)');
        $stament->execute(['Administrador','adm@adm.com',$senha,'adm']);
    }


    //verificar email e senha do usuario
    $stament = 
        $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
        //validar os valores com expressões regulares - validar se é um email
    $stament->execute([$email]);
    $usuario = $stament -> fetch(PDO::FETCH_ASSOC);
    if ($usuario && password_verify($senha, $usuario['senha']))
    {
        return $usuario;
    } else {
        return null;
    }
}
?>