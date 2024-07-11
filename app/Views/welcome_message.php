<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Submitted Information</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> <?= esc($name) ?></li>
        <li class="list-group-item"><strong>Lastname:</strong> <?= esc($lastname) ?></li>
        <li class="list-group-item"><strong>Address:</strong> <?= esc($address) ?></li>
        <li class="list-group-item"><strong>Cellphone:</strong> <?= esc($cellphone) ?></li>
        <?php if (!empty($picture)): ?>
            <li class="list-group-item"><strong>Picture:</strong> <img src="<?= base_url('assets/img/uploads/' . $picture) ?>" class="img-fluid" alt="Uploaded Picture" style="max-width: 15%;"></li>
        <?php endif; ?>
        <li class="list-group-item"><a href="<?php echo base_url(''); ?> " class="btn btn-primary">Back</a></li>
    </ul>
</div>

<!-- Bootstrap JS (jQuery is required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
