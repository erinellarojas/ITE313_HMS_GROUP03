<h1>Users List</h1>
<a href="/users/add">Add New User</a>
<table border="1">
<tr><th>ID</th><th>Username</th><th>Role</th><th>Actions</th></tr>
<?php foreach($users as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['username'] ?></td>
<td><?= $u['role'] ?></td>
<td>
<a href="/users/edit/<?= $u['id'] ?>">Edit</a> |
<a href="/users/delete/<?= $u['id'] ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>
