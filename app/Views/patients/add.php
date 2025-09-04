<h2>Add New Patient</h2>

<form method="post" action="/patients/store">
    <label>Name:</label><br>
    <input type="text" name="name" placeholder="Enter name" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" placeholder="Enter age" required><br><br>

    <label>Gender:</label><br>
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>

    <label>Contact:</label><br>
    <input type="text" name="contact" placeholder="Enter contact number"><br><br>

    <button type="submit">Add Patient</button>
</form>

<br>
<a href="/patients">Back to Patients List</a>
