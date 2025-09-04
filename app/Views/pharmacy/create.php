<h1>Add Medicine</h1>
<form action="/pharmacy/create" method="post">
    <label>Patient ID</label>
    <input type="number" name="patient_id" required>
    <label>Medicine Name</label>
    <input type="text" name="medicine_name" required>
    <label>Quantity</label>
    <input type="number" name="quantity" required>
    <label>Status</label>
    <select name="status">
        <option value="pending">Pending</option>
        <option value="dispensed">Dispensed</option>
    </select>
    <button type="submit">Save</button>
</form>
<a href="/pharmacy">Back</a>
