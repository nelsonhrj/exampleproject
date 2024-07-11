<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Create a new user</h2>
    <?= form_open_multipart( 'welcome', ['id' => 'myForm']) ?>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name') ?>" required>
        <div class="invalid-feedback">Please enter your name.</div>
    </div>

    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?= set_value('lastname') ?>" required>
        <div class="invalid-feedback">Please enter your lastname.</div>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="<?= set_value('address') ?>" required>
        <div class="invalid-feedback">Please enter your address.</div>
    </div>

    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" class="form-control-file" id="picture" name="picture" accept=".jpg, .jpeg, .png, .gif" required>
        <div class="invalid-feedback">Please upload a valid picture (JPG, JPEG, PNG, GIF).</div>
    </div>

    <div class="form-group">
        <label for="cellphone">Cellphone</label>
        <input type="text" class="form-control" id="cellphone" name="cellphone" value="<?= set_value('cellphone') ?>" required>
        <div class="invalid-feedback">Please enter your cellphone number.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    <?= form_close() ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="<?= base_URL('assets/js/main.js'); ?>"></script>
<?php if ($users) {?>
<div class="container mt-4" style="margin-top: 250px;">
    <h2>Users List</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>Cellphone</th>
            <th>Picture</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td><?php echo $user['cellphone']; ?></td>
                <td><img src="<?= base_url('assets/img/uploads/' . $user['picture']); ?>" class="img-thumbnail" width="50" height="50" alt="User Picture"></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php }?>
</body>
</html>


