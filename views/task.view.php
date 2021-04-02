<?php require 'partials/head.php';

?>

    <ul>
    <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <s>
                        <?= $task->description ?>
                    </s> <a href="/users/edit?id=<?=$user->id;?>">Edit</a>
                <?php else : ?>
                    <?= $task->description ?> <a href="/users/edit?id=<?=$user->id;?>">Edit</a>
                <?php endif; ?>
            <?php endforeach; ?>
    </ul>

    <form action="/todos" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>
