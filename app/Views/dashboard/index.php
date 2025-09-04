<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1>Welcome, <?= session('username') ?></h1>
<p>Your role: <?= session('role') ?></p>

<div class="cards">
    <div class="card">
        <h3>Patients</h3>
        <p><a href="<?= base_url('/patients') ?>">View Patients</a></p>
    </div>
    <div class="card">
        <h3>Doctors</h3>
        <p><a href="<?= base_url('/doctors') ?>">View Doctors</a></p>
    </div>
    <div class="card">
        <h3>Appointments</h3>
        <p><a href="<?= base_url('/appointments') ?>">View Appointments</a></p>
    </div>
</div>
<?= $this->endSection() ?>
