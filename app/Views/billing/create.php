<h1>Add Bill</h1>
<form action="/billing/create" method="post">
    <label>Patient ID</label>
    <input type="number" name="patient_id" required>
    <label>Amount</label>
    <input type="number" step="0.01" name="amount" required>
    <label>Status</label>
    <select name="status">
        <option value="pending">Pending</option>
        <option value="paid">Paid</option>
    </select>
    <button type="submit">Save</button>
</form>
<a href="/billing">Back</a>
