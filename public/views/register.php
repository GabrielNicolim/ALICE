<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>Cadastro</h1>

            <div class="return">
                <a href="../../index.php" class="btn">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                </a>
            </div>
        </div>
        <?php 
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 1)
                    echo "<div class='error-login'>Insira dados corretos!</div>";
                if ($_GET['error'] == 2)
                    echo "<div class='error-login'>Email já cadastrado! <a class='btn-error' href='login.php'>Faça login</a></div>";
            }
        ?>
        <form action="../../php/registerLogic.php" onsubmit="return registerValidate(event)" method="POST">
            <input type="text" name="name" id="name" placeholder="Nome" maxlength='40' required>
            <input type="email" name="email" id="email" placeholder="Email" maxlength='128' required>

            <div id="password-box">
                <input type="password" name="password" id="password" placeholder="Senha" maxlength='128' onkeyup="passwordValidate()">
                <img src="../images/eye-off.svg" id="icon" onclick="showPassword()">

                <div id="password-error-box"></div>
            </div>

            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmar senha" maxlength='128' required>
            <input type="submit" class="submitBtn" value="Cadastrar-se">
        </form>

        <div class="register">
            <span>Já possui um cadastro? <a href="login.php">Entrar</a></span>
        </div>
    </div>

    <script type="text/javascript" src="../scripts/formValidate.js"></script>
    <script type="text/javascript" src="../scripts/registerValidate.js"></script>
    <script type="text/javascript" src="../scripts/showPassword.js"></script>
</body>
</html>