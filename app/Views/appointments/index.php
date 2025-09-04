<!DOCTYPE html>
<html>
<head>
    <title>Appointments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Appointments</h1>
    <a href="/appointments/create" class="btn btn-primary mb-3">Add Appointment</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient ID</th>
                <th>Doctor ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($appointments)) : ?>
                <?php foreach($appointments as $appointment) : ?>
                    <tr>
                        <td><?= $appointment['id'] ?></td>
                        <td><?= $appointment['patient_id'] ?></td>
                        <td><?= $appointment['doctor_id'] ?></td>
                        <td><?= $appointment['appointment_date'] ?></td>
                        <td><?= $appointment['status'] ?></td>
                        <td>
                            <a href="/appointments/delete/<?= $appointment['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">No appointments found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
