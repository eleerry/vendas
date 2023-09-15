<?php 
require_once('conexao.php');

$senha = '123';
$senha_crip = md5($senha);

// realizar a consulta no banco, para saber se tem usuário adm;
$query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'SAS'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg == 0){
//super adm sas
    $pdo->query("INSERT INTO usuarios SET empresa = '0', nome = 'Administrador SAS', cpf = '000.000.000-0', email = 'admin@veleerry.com.br', senha = '$senha', senha_crip = '$senha_crip', ativo = 'sim', foto = 'sem-foto.jpg', nivel = 'SAS' "); 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" type="image/png" href="/assets/imgs/logo-ico.png">
    <title>V'Eleérry</title>
</head>
<body>
    <main class="login-container">

        <div class="form-conteiner">
            <form action="autenticar.php" method="post" class="form">

                <div class="card">
                    <div class="card-header">
                        <h2>Credenciais:</h2>
                    </div>
                    <div class="card-body">

                        <div class="form-group my-3">
                            <label for="usuario" class="mb-2">Usuario:</label>
                            <input 
                                type="text"
                                name="usuario"
                                id="usuario"
                                title="Digite seu e-mail ou CPF"
                                class="form-control"
                                placeholder="Informe seu e-mail ou CPF..."
                                autofocus>
                        </div>

                        <div class="form-group my-3">
                            <label for="password" class="mb-2">Senha:</label>
                            <input 
                                type="password"
                                name="senha"
                                id="senha"
                                title="Digite sua senha"
                                class="form-control"
                                placeholder="Informe sua Senha...">
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn recover-password">Recuperar Senha</a>
                        <button class="btn btn-lg btn-success login-submit">Logar</button>
                    </div>
                </div>

            </form>

        </div>
        <div class="logo-container">
            <div class="logo">
                <i class="fa-brands fa-shopify"></i>
            </div>
            <div class="logo-text">
                <h2>V'Eleérry</h2>
            </div>
        </div>
    </main>
</body>
</html>
