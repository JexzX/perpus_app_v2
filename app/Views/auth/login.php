<?= view('layout/header_dark') ?>
<div class="login-container">
    <img src="/logo.png" alt="Logo">
    <h2>Welcome to Perpustakaan Teknologi Informasi</h2>
    <?php if(session()->getFlashdata('error')): ?>
    <div class="alert error"><?= session()->getFlashdata('error') ?></div>
    <?php endif ?>
    <form action="/login" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn" type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="/register">Register here</a></p>
</div>
<?= view('layout/footer_dark') ?>