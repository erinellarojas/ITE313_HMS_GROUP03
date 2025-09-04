<h1>Pharmacy</h1>
<a href="/pharmacy/create">Add Medicine</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient ID</th>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pharmacy as $med): ?>
        <tr>
            <td><?= $med['id'] ?></td>
            <td><?= $med['patient_id'] ?></td>
            <td><?= $med['medicine_name'] ?></td>
            <td><?= $med['quantity'] ?></td>
            <td><?= $med['status'] ?></td>
            <td>
                <a href="/pharmacy/edit/<?= $med['id'] ?>">Edit</a>
                <a href="/pharmacy/delete/<?= $med['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
