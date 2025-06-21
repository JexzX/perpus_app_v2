<?=view('layout/header')?>
<h2>Register (Mahasiswa)</h2>
<?php if(session()->getFlashdata('success')) echo '<p style="color:green">'.session()->getFlashdata('success').'</p>'; ?>
<form action="/register" method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Register</button>
</form>
<?=view('layout/footer')?>