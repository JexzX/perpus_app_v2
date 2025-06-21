<?=view('layout/header')?>
<h2>Login</h2>
<?php if(session()->getFlashdata('error')) echo '<p style="color:red">'.session()->getFlashdata('error').'</p>'; ?>
<form action="/login" method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>
<?=view('layout/footer')?>