<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login | Estacionar</title>
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

                    </div>
                </header>
            </div>
            <?php
                $host="localhost";
                $user="root";
                $pass="";
                $banco="estacionar";
                $conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
                mysqli_select_db($conexao,$banco) or die(mysqli_error());
            ?>
            
            <?php
                $login=$_POST['login'];
                $senha=$_POST['senha'];
                $nome=$_POST['nome'];
                $cpf=$_POST['cpf'];
                $tel=$_POST['tel'];
                $carro=$_POST['carro'];
                $placa=$_POST['placa'];
                $sql=mysqli_query($conexao,"INSERT INTO usuario(login, senha, nome, cpf, tel, carro, placa)VALUES ('$login', '$senha', '$nome', '$cpf', '$tel','$carro','$placa')");
                echo "<center><h1>Cadastro realizado com sucesso!</h1></center>";
                mysqli_close($conexao);
            ?>
            <div id="formcent">
                
            <form name="singup" method="post" action="home.php"> 
                <br>
                <h2> LOGIN </h2>    
                <label>Login: <input type="text" name="login" /></label> <br><br>
                <label>Senha: <input type="password" name="senha" /></label> <br><br>
                <input type="submit" value="Login" /> <br>
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
