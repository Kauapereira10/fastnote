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

$tasks = $taskController->getTasksByUser(
    $_SESSION['user_id']
);

include '../includes/header.php';
include '../includes/navbar.php';

?>

<div class="container">

    <h1>Dashboard</h1>

    <p class="welcome-text">

        Bem-vindo de volta,

        <strong>
            <?= htmlspecialchars($_SESSION['user_name']) ?>
        </strong>

    </p>

    <?php if (isset($_SESSION['success'])): ?>

        <div class="success-message">
            <?= $_SESSION['success'] ?>
        </div>

        <?php unset($_SESSION['success']); ?>

    <?php endif; ?>

    <?php if (empty($tasks)): ?>

        <p>Nenhuma tarefa encontrada.</p>

    <?php else: ?>

        <?php foreach ($tasks as $task): ?>

            <div class="task-card">

                <h3>
                    <?= htmlspecialchars($task['title']) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($task['description']) ?>
                </p>

                <?php

                    if ($task['status'] == 'PENDING') {

                        echo '<span class="status status-pending">Pendente</span>';

                    } elseif ($task['status'] == 'IN_PROGRESS') {

                        echo '<span class="status status-progress">Em andamento</span>';

                    } else {

                        echo '<span class="status status-completed">Concluído</span>';
                    }

                ?>

                <div class="task-actions">

                    <a
                        class="edit-btn"
                        href="edit_task.php?id=<?= $task['id'] ?>"
                    >
                        Editar
                    </a>

                    <a
                        class="delete-btn"
                        href="../actions/delete_task.php?id=<?= $task['id'] ?>"
                    >
                        Excluir
                    </a>

                </div>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

</div>

<?php include '../includes/footer.php'; ?>