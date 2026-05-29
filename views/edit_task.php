<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}

require_once '../config/database.php';
require_once '../controllers/TaskController.php';

$pdo = getConnection();

$taskController = new TaskController($pdo);

$id = $_GET['id'];

$task = $taskController->getTaskById(
    $id,
    $_SESSION['user_id']
);

include '../includes/header.php';
include '../includes/navbar.php';

?>

<div class="container">

    <h1>Editar Tarefa</h1>

    <?php if(isset($_GET['success'])): ?>

        <div class="success-message">
            ✅ Tarefa atualizada com sucesso!
        </div>

    <?php endif; ?>

    <?php if(isset($_GET['error'])): ?>

        <div class="error-message">
            ❌ Erro ao atualizar tarefa.
        </div>

    <?php endif; ?>

    <form action="../actions/update_task.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $task['id'] ?>"
        >

        <div>

            <label>Título</label>

            <input
                type="text"
                name="title"
                value="<?= htmlspecialchars($task['title']) ?>"
                required
            >

        </div>

        <div>

            <label>Descrição</label>

            <textarea
                name="description"
            ><?= htmlspecialchars($task['description']) ?></textarea>

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
            Salvar Alterações
        </button>

    </form>

</div>

<?php include '../includes/footer.php'; ?>