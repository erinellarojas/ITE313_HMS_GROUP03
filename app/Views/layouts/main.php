<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <meta name="description" content="Hospital Management System - Manage patients, doctors, appointments, and billing easily.">
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-p..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?= $this->include('partials/nav') ?>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</body>
</html>
