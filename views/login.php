<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div class="container">

    <h1>Login</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <p><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <p><?= $_SESSION['success'] ?></p>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <form action="../actions/login.php" method="POST">

        <div>
            <label>Email</label>
            <input
                type="email"
                name="email"
                placeholder="Digite seu email"
                required
            >
        </div>

        <div>
            <label>Senha</label>
            <input
                type="password"
                name="password"
                placeholder="Digite sua senha"
                required
            >
        </div>

        <button type="submit">
            Fazer Login
        </button>

    </form>

    <p>
        Não tem uma conta?
        <a href="register.php">Registrar</a>
    </p>

    </div>
<?php include '../includes/footer.php'; ?>