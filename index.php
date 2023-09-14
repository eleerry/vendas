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
            <form action="#" method="post" class="form">

                <div class="card">
                    <div class="card-header">
                        <h2>Credenciais:</h2>
                    </div>
                    <div class="card-body">

                        <div class="form-group my-3">
                            <label for="email" class="mb-2">E-mail:</label>
                            <input 
                                type="email"
                                name="email"
                                id="email"
                                title="Digite seu e-mail"
                                class="form-control"
                                placeholder="Informe seu E-mail..."
                                autofocus>
                        </div>

                        <div class="form-group my-3">
                            <label for="password" class="mb-2">Senha:</label>
                            <input 
                                type="password"
                                name="password"
                                id="password"
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