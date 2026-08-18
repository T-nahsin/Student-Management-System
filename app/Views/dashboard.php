<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

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

        .logout {
            color: white;
            text-decoration: none;
            background: #dc2626;
            padding: 9px 15px;
            border-radius: 5px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            margin-bottom: 8px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            color: #666;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <h2>Student Management System</h2>

        <a class="logout" href="<?= base_url('logout') ?>">
            Logout
        </a>

    </nav>


    <div class="container">

        <div class="welcome">

            <h1>
                Welcome, <?= esc(session()->get('name')) ?>
            </h1>

            <p>
                Manage students and their academic information.
            </p>

        </div>


        <?php if (session()->has('success')): ?>

            <p>
                <?= esc(session()->getFlashdata('success')) ?>
            </p>

        <?php endif; ?>


        <div class="cards">

            <div class="card">

                <h3>Students</h3>

                <p>
                    Add and manage student records.
                </p>

                <a
                    class="btn"
                    href="<?= base_url('create-student') ?>"
                >
                    Add Student
                </a>

            </div>


            <div class="card">

                <h3>View Students</h3>

                <p>
                    View all registered students.
                </p>

                <a
                    class="btn"
                    href="<?= base_url('students') ?>"
                >
                    View Students
                </a>

            </div>

        </div>

    </div>

</body>

</html>