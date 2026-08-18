<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-bottom: 25px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: span 2;
        }

        label {
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .button-container {
            margin-top: 25px;
        }

        button {
            padding: 11px 20px;
            border: none;
            border-radius: 5px;
            background: #2563eb;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .error {
            color: #dc2626;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Add Student</h1>

        <?php if (session()->has('errors')): ?>

            <div class="error">
                <?php foreach (session('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>


        <form action="<?= base_url('/create-student') ?>" method="post">

            <?= csrf_field() ?>

            <div class="form-grid">

                <div class="form-group">
                    <label for="name">Student Name</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="<?= old('name') ?>"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="<?= old('email') ?>"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="phone">Phone</label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="<?= old('phone') ?>"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="course">Course</label>

                    <input
                        type="text"
                        id="course"
                        name="course"
                        value="<?= old('course') ?>"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>

                    <input
                        type="date"
                        id="date_of_birth"
                        name="date_of_birth"
                        value="<?= old('date_of_birth') ?>"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="admission_date">Admission Date</label>

                    <input
                        type="date"
                        id="admission_date"
                        name="admission_date"
                        value="<?= old('admission_date') ?>"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="fees">Fees</label>

                    <input
                        type="number"
                        id="fees"
                        name="fees"
                        step="0.01"
                        min="0"
                        value="<?= old('fees') ?>"
                        required
                    >
                </div>


                <div class="form-group full">
                    <label for="address">Address</label>

                    <textarea
                        id="address"
                        name="address"
                        required
                    ><?= old('address') ?></textarea>
                </div>

            </div>


            <div class="button-container">

                <button type="submit">
                    Add Student
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>