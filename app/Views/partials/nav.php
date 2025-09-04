<nav>
    <ul>
        <li><a href="<?= base_url('/dashboard') ?>">Dashboard</a></li>

        <?php if(session('role') === 'admin'): ?>
            <li><a href="<?= base_url('/users') ?>">Users</a></li>
            <li><a href="<?= base_url('/appointments') ?>">Appointments</a></li>
        <?php endif; ?>

        <?php if(in_array(session('role'), ['admin','user'])): ?>
            <li><a href="<?= base_url('/patients') ?>">Patients</a></li>
        <?php endif; ?>

        <li><a href="<?= base_url('/doctors') ?>">Doctors</a></li>
        <li><a href="<?= base_url('/nurses') ?>">Nurses</a></li>
        <li><a href="<?= base_url('/billing') ?>">Billing</a></li>
        <li><a href="<?= base_url('/laboratory') ?>">Laboratory</a></li>
        <li><a href="<?= base_url('/pharmacy') ?>">Pharmacy</a></li>

        <li><a href="<?= base_url('/logout') ?>">Logout</a></li>
    </ul>
</nav>
