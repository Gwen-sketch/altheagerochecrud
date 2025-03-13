<h2>Are you sure you want to delete <?= htmlspecialchars($user['name']) ?>?</h2>
<form action="router.php?action=destroy&index=<?= $index ?>" method="POST">
    <button type="submit">Yes, Delete</button>
</form>
<a href="index.php">Cancel</a>
