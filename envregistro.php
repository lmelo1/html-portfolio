<?php

if (empty($_POST['nome'])) {
    $resultado=false;
}
else {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : "O";
    $complemento = isset($_POST['complemento']) ? $_POST['complemento'] : " ";

    $user = 'samyvet';
    $pass = 'XdqdG4@Sql';
    /*   
    $user = 'root';
    $pass = '';
    */
    $data = [
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'email' => $email,
        'senha'=> $senha,
        'tipo' => $tipo,
        'complemento' => $complemento,
    ];

    try {
        $conn = new PDO('mysql:host=samyvet.mysql.dbaas.com.br;dbname=samyvet', $user, $pass);
        //$conn = new PDO('mysql:host=localhost;dbname=samy', $user, $pass);
        $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, tipo, complemento) VALUES (:nome, :sobrenome, :email, :senha, :tipo, :complemento)";

    $stmt = $conn->prepare($sql);
    $resultado = $stmt->execute($data);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

    ?>

    <html lang="pt-br">
        
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
        
    <body>
            <div class="container">
                <div class="row">
                    <div class="col" style="text-align:center">

                        <?php if($resultado) { ?>
                            <h2 style = "color:blue">REGISTRO EFETUADO! - Obrigado.</h2>
                         <?php } else { ?>
                            <h2 style = "color:red">ERRO AO REGISTRAR - Desculpe, tente mais tarde. </h2>
                        <?php } ?>
                        <br>
                        <a href="index.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            </body>
    </html>
