<h1>Add Laboratory Test</h1>
<form action="/laboratory/create" method="post">
    <label>Patient ID</label>
    <input type="number" name="patient_id" required>
    <label>Test Name</label>
    <input type="text" name="test_name" required>
    <label>Result</label>
    <textarea name="result"></textarea>
    <label>Status</label>
    <select name="status">
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
    </select>
    <button type="submit">Save</button>
</form>
<a href="/laboratory">Back</a>
