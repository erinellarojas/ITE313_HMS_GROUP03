<h1>Edit Nurse</h1>
<form action="/nurses/update/<?= $nurse['id'] ?>" method="post">
    <label>Name</label>
    <input type="text" name="name" value="<?= $nurse['name'] ?>" required>
    <label>Department</label>
    <input type="text" name="department" value="<?= $nurse['department'] ?>" required>
    <label>Phone</label>
    <input type="text" name="phone" value="<?= $nurse['phone'] ?>">
    <label>Email</label>
    <input type="email" name="email" value="<?= $nurse['email'] ?>">
    <button type="submit">Update</button>
</form>
<a href="/nurses">Back</a>
