<h1>Edit Patient</h1>

<form method="post" action="/patients/update/<?= $patient['id'] ?>">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?= $patient['name'] ?>" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" value="<?= $patient['age'] ?>" required><br><br>

    <label>Gender:</label><br>
    <select name="gender">
        <option value="Male" <?= $patient['gender']=='Male' ? 'selected' : '' ?>>Male</option>
        <option value="Female" <?= $patient['gender']=='Female' ? 'selected' : '' ?>>Female</option>
    </select><br><br>

    <label>Contact:</label><br>
    <input type="text" name="contact" value="<?= $patient['contact'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
