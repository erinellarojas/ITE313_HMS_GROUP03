<h1>Add New User</h1>
<form action="/users/store" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Role: 
<select name="role">
    <option value="admin">Admin</option>
    <option value="doctor">Doctor</option>
    <option value="nurse">Nurse</option>
    <option value="receptionist">Receptionist</option>
    <option value="lab">Laboratory</option>
    <option value="pharmacy">Pharmacy</option>
    <option value="accountant">Accountant</option>
    <option value="it">IT</option>
</select><br>
<button type="submit">Save</button>
</form>
