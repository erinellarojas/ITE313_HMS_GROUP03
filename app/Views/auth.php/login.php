<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital System - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Hospital System Login</h4>
                </div>
                <div class="card-body">
                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('auth/attemptLogin') ?>">
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Role</label>
                            <select name="role" class="form-select" required>
                                <option value="">Select Role</option>
                                <option value="1">Hospital Administrator</option>
                                <option value="2">Doctor</option>
                                <option value="3">Nurse</option>
                                <option value="4">Receptionist</option>
                                <option value="5">Laboratory Staff</option>
                                <option value="6">Pharmacist</option>
                                <option value="7">Accountant</option>
                                <option value="8">IT Staff</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="<?= base_url('register') ?>">Register</a>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    &copy; <?= date('Y') ?> San Miguel Hospital
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
