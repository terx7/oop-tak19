<h1><?= $task->description; ?></h1>

<form action="edit" method="POST">

    <input type="hidden" name="id" value="<?= $task->id; ?>">

    <input type="text" name="description" value="<?= $task->description; ?>">

    <button type="submit" name="save">Save</button>

</form>
