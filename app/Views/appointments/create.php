<!DOCTYPE html>
<html>
<head>
    <title>Add Appointment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Add Appointment</h1>
    <form action="/appointments/create" method="post">
        <div class="mb-3">
            <label for="patient_id" class="form-label">Patient ID</label>
            <input type="number" name="patient_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="doctor_id" class="form-label">Doctor ID</label>
            <input type="number" name="doctor_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="appointment_date" class="form-label">Appointment Date</label>
            <input type="datetime-local" name="appointment_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="Pending" selected>Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/appointments" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
