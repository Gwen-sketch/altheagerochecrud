<?php require_once __DIR__ . '/../router.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>
    <a href="router.php?action=create">Add New User</a>
    <table border="1">
        <tr><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php foreach ($users as $index => $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="router.php?action=edit&index=<?= $index ?>">Edit</a> |
                    <a href="router.php?action=delete&index=<?= $index ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
