<form action="router.php?action=update&index=<?= $index ?>" method="POST">
    <label>Name:</label> <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br>
    <label>Email:</label> <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back</a>
