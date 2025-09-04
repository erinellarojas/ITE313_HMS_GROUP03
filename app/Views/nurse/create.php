<h1>Add Nurse</h1>
<form action="/nurses/create" method="post">
    <label>Name</label>
    <input type="text" name="name" required>
    <label>Department</label>
    <input type="text" name="department" required>
    <label>Phone</label>
    <input type="text" name="phone">
    <label>Email</label>
    <input type="email" name="email">
    <button type="submit">Save</button>
</form>
<a href="/nurses">Back</a>
