<?= view('layout/header_dark') ?>
<h2>Borrow Book</h2>
<form action="/borrow/store" method="post">
    <select name="book_id" required>
        <?php foreach($books as $b): ?>
        <option value="<?= $b['id'] ?>"><?= esc($b['title']) ?></option>
        <?php endforeach ?>
    </select>
    <select name="durasi">
        <option value="1">1 Day</option>
        <option value="3">3 Days</option>
        <option value="7">1 Week</option>
        <option value="21">3 Weeks</option>
        <option value="30">1 Month</option>
    </select>
    <button class="btn" type="submit">Borrow</button>
</form>
<?= view('layout/footer_dark') ?>