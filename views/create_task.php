<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}

include '../includes/header.php';
include '../includes/navbar.php';

?>

<div class="container">

    <h1>Criar Nova Tarefa</h1>

    <?php if (isset($_SESSION['error'])): ?>

        <div class="error-message">
            <?= $_SESSION['error'] ?>
        </div>

        <?php unset($_SESSION['error']); ?>

    <?php endif; ?>

    <form action="../actions/create_task.php" method="POST">

        <div>

            <label>Título</label>

            <input
                type="text"
                name="title"
                placeholder="Digite o título da tarefa"
                required
            >

        </div>

        <div>

            <label>Descrição</label>

            <textarea
                name="description"
                placeholder="Digite a descrição da tarefa"
            ></textarea>

        </div>

        <div>

            <label>Status</label>

            <select name="status">

                <option value="PENDING">
                    Pendente
                </option>

                <option value="IN_PROGRESS">
                    Em andamento
                </option>

                <option value="COMPLETED">
                    Concluído
                </option>

            </select>

        </div>

        <button type="submit">
            Criar Tarefa
        </button>

    </form>

</div>

<?php include '../includes/footer.php'; ?>