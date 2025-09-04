<h1>Nurses List</h1>
<a href="/nurses/create">Add Nurse</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($nurses as $nurse): ?>
        <tr>
            <td><?= $nurse['id'] ?></td>
            <td><?= $nurse['name'] ?></td>
            <td><?= $nurse['department'] ?></td>
            <td><?= $nurse['phone'] ?></td>
            <td><?= $nurse['email'] ?></td>
            <td>
                <a href="/nurses/edit/<?= $nurse['id'] ?>">Edit</a>
                <a href="/nurses/delete/<?= $nurse['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
