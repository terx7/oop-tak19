<?php require 'partials/head.php';

?>

    <ul>

            <?php foreach ( $tasks as $task ) : ?>
            <li>
                <input type="checkbox" name="completed" <?= $task->completed == "1"  ? "checked" : ""; ?>>
                <?= $task->description; ?>
                <a href="/tasks/delete?id=<?= $task->id; ?>">delete</a>
                <a href="/tasks/edit?id=<?= $task->id; ?>">edit</a>
            </li>
            <?php endforeach; ?>
    </ul>

    <form action="/tasks" method="POST">
        <input type="text" name="description">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>
