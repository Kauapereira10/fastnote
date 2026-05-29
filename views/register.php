<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div class="container">

    <h1>Registrar</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <p><?= $_SESSION['error'] ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form action="../actions/register.php" method="POST">

        <div>
            <label>Nome</label>
            <input
                type="text"
                name="name"
                placeholder="Digite seu nome"
                required
            >
        </div>

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
            Registrar
        </button>

    </form>

    <p>
        Já tem uma conta?
        <a href="login.php">Fazer Login</a>
    </p>

    </div>

<?php include '../includes/footer.php'; ?>