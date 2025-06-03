<?php
    // Conexão com o banco de dados
    $host = 'localhost'; // Endereço do servidor MySQL
    $usuario = 'root'; // Usuário do MySQL
    $senha = ''; // Senha do MySQL
    $banco = 'starplay'; // Nome do banco de dados
    
    // Cria a conexão
    $conn = mysqli_connect($host, $usuario, $senha, $banco);

    if ($conn) {
        //echo "Conexão bem-sucedida ao banco de dados.";
    }else{
        echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
        exit();
    }

    function data($data){
        // Converte a data do formato 'Y-m-d' para 'd/m/Y'
        $data = explode('-', $data);
        return $data[2] . '/' . $data[1] . '/' . $data[0];
    }
?>