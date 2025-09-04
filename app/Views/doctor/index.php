<h1>Doctors List</h1>
<a href="/doctors/create">Add Doctor</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Specialization</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($doctors as $doctor): ?>
        <tr>
            <td><?= $doctor['id'] ?></td>
            <td><?= $doctor['name'] ?></td>
            <td><?= $doctor['specialization'] ?></td>
            <td><?= $doctor['phone'] ?></td>
            <td><?= $doctor['email'] ?></td>
            <td>
                <a href="/doctors/edit/<?= $doctor['id'] ?>">Edit</a>
                <a href="/doctors/delete/<?= $doctor['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
