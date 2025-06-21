<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/29/29302.png" type="image/png">

    <title>Perpustakaan Teknologi Informasi</title>
    <meta charset="UTF-8">
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: #007BFF;
        padding: 15px;
        color: white;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }

    .container {
        padding: 20px;
        max-width: 1000px;
        margin: auto;
    }

    .card {
        background-color: white;
        border-radius: 6px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        padding: 20px;
        margin-bottom: 20px;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-weight: bold;
        color: #007BFF;
    }

    .button {
        background-color: #007BFF;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ccc;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>

    <div class="navbar">
        <strong>Perpustakaan Teknologi Informasi</strong> |
        <?php if(session()->get('isLoggedIn')): ?>
        Hello, <?= session()->get('username') ?> (<?= session()->get('role') ?>)
        <a href="/dashboard">Home</a>
        <a href="/borrow">Borrow</a>
        <a href="/reports">Reports</a>
        <?php if(session()->get('role') == 'admin'): ?>
        <a href="/admin/books">Manage Books</a>
        <?php endif ?>
        <a href="/logout">Logout</a>
        <?php else: ?>
        <a href="/">Login</a>
        <a href="/register">Register</a>
        <?php endif ?>
    </div>

    <div class="container">