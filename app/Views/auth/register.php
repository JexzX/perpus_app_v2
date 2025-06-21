<?= view('layout/header_dark') ?>
<div class="login-container">
    <h2>Register as Mahasiswa</h2>
    <?php if(session()->getFlashdata('success')): ?>
    <div class="alert success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>
    <form action="/register" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn" type="submit">Register</button>
    </form>
    <p>Already have account? <a href="/">Login here</a></p>
</div>
<?= view('layout/footer_dark') ?>