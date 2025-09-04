<h1>Billing List</h1>
<a href="/billing/create">Add Bill</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient ID</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($billing as $bill): ?>
        <tr>
            <td><?= $bill['id'] ?></td>
            <td><?= $bill['patient_id'] ?></td>
            <td><?= $bill['amount'] ?></td>
            <td><?= $bill['status'] ?></td>
            <td>
                <a href="/billing/edit/<?= $bill['id'] ?>">Edit</a>
                <a href="/billing/delete/<?= $bill['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
