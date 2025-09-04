<h2>Patients List</h2>
<a href="/patients/add">Add New Patient</a>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Contact</th>
        <th>Actions</th>
    </tr>
    <?php if(!empty($patients) && is_array($patients)): ?>
        <?php foreach($patients as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['name'] ?></td>
            <td><?= $p['age'] ?></td>
            <td><?= $p['gender'] ?></td>
            <td><?= $p['contact'] ?></td>
            <td>
                <a href="/patients/edit/<?= $p['id'] ?>">Edit</a> |
                <a href="/patients/delete/<?= $p['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">No patients found.</td>
        </tr>
    <?php endif; ?>
</table>
