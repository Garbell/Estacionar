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

                        <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="cadastro.php">Cadastrar</a></li>
                                <li><a href="loginAdmin.php">Admin</a></li>
                            </ul>
                        </nav>

                    </div>
                </header>
            </div>
            
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
