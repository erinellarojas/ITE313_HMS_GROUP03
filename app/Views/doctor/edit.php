<h1>Edit Doctor</h1>
<form action="/doctors/update/<?= $doctor['id'] ?>" method="post">
    <label>Name</label>
    <input type="text" name="name" value="<?= $doctor['name'] ?>" required>
    <label>Specialization</label>
    <input type="text" name="specialization" value="<?= $doctor['specialization'] ?>" required>
    <label>Phone</label>
    <input type="text" name="phone" value="<?= $doctor['phone'] ?>">
    <label>Email</label>
    <input type="email" name="email" value="<?= $doctor['email'] ?>">
    <button type="submit">Update</button>
</form>
<a href="/doctors">Back</a>
