<h1>Edit Laboratory Test</h1>
<form action="/laboratory/update/<?= $lab['id'] ?>" method="post">
    <label>Patient ID</label>
    <input type="number" name="patient_id" value="<?= $lab['patient_id'] ?>" required>
    <label>Test Name</label>
    <input type="text" name="test_name" value="<?= $lab['test_name'] ?>" required>
    <label>Result</label>
    <textarea name="result"><?= $lab['result'] ?></textarea>
    <label>Status</label>
    <select name="status">
        <option value="pending" <?= $lab['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="completed" <?= $lab['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
    </select>
    <button type="submit">Update</button>
</form>
<a href="/laboratory">Back</a>
