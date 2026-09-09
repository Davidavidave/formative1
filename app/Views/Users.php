<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <div class="page">
        <nav>
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('/about') ?>">About</a>
            <a href="<?= base_url('/customers') ?>">Customers</a>
            <a href="<?= base_url('/users') ?>">Users</a>
        </nav>

        <div class="content-card">
            <h1>User Accounts</h1>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($users ?? [] as $user): ?>

                            <tr>
                                <td><?= esc($user['username']) ?></td>
                                <td><?= esc($user['name']) ?></td>
                                <td><?= esc($user['role']) ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>