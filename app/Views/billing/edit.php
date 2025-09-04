<h1>Edit Bill</h1>
<form action="/billing/update/<?= $bill['id'] ?>" method="post">
    <label>Patient ID</label>
    <input type="number" name="patient_id" value="<?= $bill['patient_id'] ?>" required>
    <label>Amount</label>
    <input type="number" step="0.01" name="amount" value="<?= $bill['amount'] ?>" required>
    <label>Status</label>
    <select name="status">
        <option value="pending" <?= $bill['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="paid" <?= $bill['status'] == 'paid' ? 'selected' : '' ?>>Paid</option>
    </select>
    <button type="submit">Update</button>
</form>
<a href="/billing">Back</a>
