<?php require 'partials/head.php'; ?>


    <h1><?= $user->name; ?></h1>
    <form action="edit" method="POST">
    <input type="hidden" name='id' value="<?= $user->id; ?>">
    <input type="text" name='name' value="<?= $user->name; ?>">
    <button type="submit" name='save'>Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>
