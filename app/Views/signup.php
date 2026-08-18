<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Signup</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .signup-card {
            width: 90%;
            max-width: 400px;
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .error {
            color: #dc2626;
            background: #fee2e2;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="signup-card">

    <h1>Create Account</h1>

    <?php if (session()->has('errors')): ?>

        <div class="error">
            <?php foreach (session('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>

    <form action="<?= base_url('signup') ?>" method="post">

        <?= csrf_field() ?>

        <div class="form-group">

            <label for="name">Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="<?= old('name') ?>"
                placeholder="Enter your name"
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
                placeholder="Enter your email"
                required
            >

        </div>

        <div class="form-group">

            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >

        </div>

        <button type="submit">
            Signup
        </button>

    </form>

    <div class="login-link">
        Already have an account?
        <a href="<?= base_url('login') ?>">Login</a>
    </div>

</div>

</body>
</html>