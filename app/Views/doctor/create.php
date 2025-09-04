<h1>Add Doctor</h1>
<form action="/doctors/create" method="post">
    <label>Name</label>
    <input type="text" name="name" required>
    <label>Specialization</label>
    <input type="text" name="specialization" required>
    <label>Phone</label>
    <input type="text" name="phone">
    <label>Email</label>
    <input type="email" name="email">
    <button type="submit">Save</button>
</form>
<a href="/doctors">Back</a>
