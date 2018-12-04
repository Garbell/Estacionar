<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro | Estacionar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-png" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <div class="container">

                <!-- Header -->
                <header id="header">
                    <div>

                        <!-- Logo -->
                        <center>
                            <a href="index.php" id="logo"><img src="img/logomin.png"></a>
                        </center>

                        <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="home.php">User</a></li>
                                <li><a href="loginAdmin.php">Admin</a></li>
                            </ul>
                        </nav>

                    </div>
                </header>
            </div>

            <div id="formcent">    
            <form name="singup" method="post" action="cadastroRealizado.php"><br>
                <h2> CADASTRO </h2>
                    <label>Login: </label>&emsp;<input type="text" name="login" placeholder="login"/> <br><br>
                    <label>Senha: </label>&emsp;<input type="password" name="senha" placeholder="senha"/> <br><br>
                    <label>Nome: </label>&emsp;<input type="text" name="nome" placeholder="Nome completo"/> <br><br>
                    <label>CPF: </label>&emsp;<input type="text" name="cpf" placeholder="CPF"/> <br><br>
                    <label>Tel: </label>&emsp;<input type="text" name="tel" placeholder="Telefone"/> <br><br>
                    <label>Carro: </label>&emsp;<input type="text" name="carro" placeholder="Carro"/> <br><br>
                    <label>Placa: </label>&emsp;<input type="text" name="placa" placeholder="Placa"/> <br><br>
                <a href="index.php"><input type="button" value="Voltar" /></a>&emsp;
                
                <input type="submit" value="Cadastrar" /> 
            </form>
            </div>
            
        </div>
        
        <!-- Footer Wrapper -->
        <div id="footer-wrapper">

        </div>


    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>