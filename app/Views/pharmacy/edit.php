<h1>Edit Medicine</h1>
<form action="/pharmacy/update/<?= $pharmacy['id'] ?>" method="post">
    <label>Patient ID</label>
    <input type="number" name="patient_id" value="<?= $pharmacy['patient_id'] ?>" required>
    <label>Medicine Name</label>
    <input type="text" name="medicine_name" value="<?= $pharmacy['medicine_name'] ?>" required>
    <label>Quantity</label>
    <input type="number" name="quantity" value="<?= $pharmacy['quantity'] ?>" required>
    <label>Status</label>
    <select name="status">
        <option value="pending" <?= $pharmacy['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="dispensed" <?= $pharmacy['status'] == 'dispensed' ? 'selected' : '' ?>>Dispensed</option>
    </select>
    <button type="submit">Update</button>
</form>
<a href="/pharmacy">Back</a>
