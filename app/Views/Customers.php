<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>

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

    <h1>Customer Accounts</h1>

    <table>

        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($customers ?? [] as $customer): ?>

                <tr>
                    <td><?= esc($customer['name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</body>
</html>