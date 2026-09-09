<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('/about') ?>">About</a> |
        <a href="<?= base_url('/customers') ?>">Customers</a> |
        <a href="<?= base_url('/users') ?>">Users</a>
    </nav>

    <h1>User Accounts</h1>

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

</body>
</html>