<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= base_url('logo.png') ?>" type="logo">
    <title>Perpustakaan Teknologi Informasi</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        background: #23272A;
        color: #fff;
        font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
        height: 60px;
        background: #2C2F33;
        display: flex;
        align-items: center;
        padding: 0 20px;
    }

    .navbar img {
        height: 40px;
    }

    .navbar .nav-links {
        margin-left: auto;
    }

    .navbar a {
        margin-left: 20px;
        text-decoration: none;
        color: #7289DA;
        font-weight: 500;
    }

    .container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 0 20px;
    }

    .card {
        background: #2C2F33;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        transition: .3s;
    }

    .card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, .5);
    }

    .card-title {
        color: #7289DA;
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .btn {
        display: inline-block;
        background: #7289DA;
        color: #fff;
        padding: 8px 15px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }

    .btn.delete {
        background: #a33;
    }

    .btn:hover {
        opacity: .9;
    }

    input,
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #444;
        border-radius: 4px;
        background: #2C2F33;
        color: #eee;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table th,
    table td {
        border: 1px solid #444;
        padding: 10px;
    }

    table th {
        background: #2C2F33;
    }

    .login-container {
        max-width: 400px;
        margin: 60px auto;
        padding: 30px;
        background: #2C2F33;
        border-radius: 8px;
        text-align: center;
    }

    .login-container h2 {
        margin-bottom: 20px;
    }

    .login-container img {
        max-width: 120px;
        margin-bottom: 20px;
    }

    .alert {
        padding: 10px;
        border-radius: 4px;
        text-align: left;
        margin-bottom: 15px;
    }

    .alert.error {
        background: #a33;
    }

    .alert.success {
        background: #3a7;
    }

    a {
        color: #7289DA;
    }

    form.search {
        display: flex;
        margin-bottom: 20px;
    }

    form.search input {
        flex: 1;
    }

    form.search button {
        width: 100px;
        margin-left: 10px;
    }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/dashboard"><img src="/logo.png" alt="Logo"></a>
        <?php if(session()->get('isLoggedIn')): ?>
        <div class="nav-links">
            <a href="/dashboard">Home</a>
            <a href="/books">Books</a>
            <a href="/users">Members</a>
            <a href="/borrow">Borrow</a>
            <a href="/reports">Reports</a>
            <?php if(session()->get('role')=='admin'): ?><a href="/admin/books">Manage</a><?php endif ?>
            <a href="/logout">Logout (<?= session()->get('username') ?>)</a>
        </div>
        <?php else: ?>
        <div class="nav-links">
            <a href="/">Login</a>
            <a href="/register">Register</a>
        </div>
        <?php endif ?>
    </div>
    <div class="container">