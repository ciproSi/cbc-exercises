<form action="" method="POST">
    <?php foreach ($items as $i => $item) : ?>
        <input type="text" name="items[<?= $i ?>]" value="<?= htmlspecialchars($item) ?>">
        <br>
    <?php endforeach; ?>
    <input type="text" name="items[<?= count($items) ?>]" value="">
    <button>Add</button>
</form>