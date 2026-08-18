<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .navbar {
            background: #2563eb;
            color: white;
            padding: 18px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .container {
            width: 95%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
        }

        .add-btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 5px;
        }

        .table-container {
            background: white;
            border-radius: 10px;
            overflow-x: auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8fafc;
        }

        tr:hover {
            background: #f9fafb;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #666;
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <h2>Student Management System</h2>

        <div>
            <a href="<?= base_url('dashboard') ?>">
                Dashboard
            </a>

            <a href="<?= base_url('logout') ?>">
                Logout
            </a>
        </div>

    </nav>


    <div class="container">

        <div class="header">

            <h1>Students</h1>

            <a
                class="add-btn"
                href="<?= base_url('create-student') ?>"
            >
                + Add Student
            </a>

        </div>


        <?php if (session()->has('success')): ?>

            <p>
                <?= esc(session()->getFlashdata('success')) ?>
            </p>

        <?php endif; ?>


        <div class="table-container">

            <?php if (!empty($students)): ?>

                <table>

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Admission Date</th>
                            <th>Fees</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($students as $student): ?>

                            <tr>

                                <td>
                                    <?= esc($student['id']) ?>
                                </td>

                                <td>
                                    <?= esc($student['name']) ?>
                                </td>

                                <td>
                                    <?= esc($student['email']) ?>
                                </td>

                                <td>
                                    <?= esc($student['phone']) ?>
                                </td>

                                <td>
                                    <?= esc($student['course']) ?>
                                </td>

                                <td>
                                    <?= esc($student['admission_date']) ?>
                                </td>

                                <td>
                                    ₹<?= esc($student['fees']) ?>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            <?php else: ?>

                <div class="empty">
                    <p>No students found.</p>

                    <a href="<?= base_url('create-student') ?>">
                        Add your first student
                    </a>
                </div>

            <?php endif; ?>

        </div>

    </div>

</body>

</html>