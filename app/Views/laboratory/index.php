<h1>Laboratory Tests</h1>
<a href="/laboratory/create">Add Test</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient ID</th>
            <th>Test Name</th>
            <th>Result</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($laboratory as $lab): ?>
        <tr>
            <td><?= $lab['id'] ?></td>
            <td><?= $lab['patient_id'] ?></td>
            <td><?= $lab['test_name'] ?></td>
            <td><?= $lab['result'] ?></td>
            <td><?= $lab['status'] ?></td>
            <td>
                <a href="/laboratory/edit/<?= $lab['id'] ?>">Edit</a>
                <a href="/laboratory/delete/<?= $lab['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
