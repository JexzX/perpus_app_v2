<?= view('layout/header_dark') ?>
<h2>Edit Borrow</h2>
<form action="/reports/update/<?= $d['id'] ?>" method="post">
    <select name="book_id">
        <?php foreach($books as $b): ?>
        <option value="<?= $b['id'] ?>" <?= $b['id']==$d['book_id']?'selected':'' ?>><?= esc($b['title']) ?></option>
        <?php endforeach ?>
    </select>
    <label>Borrow Date</label>
    <input type="date" name="tanggal_pinjam" value="<?= $d['tanggal_pinjam'] ?>">
    <label>Return Date</label>
    <input type="date" name="tanggal_kembali" value="<?= $d['tanggal_kembali'] ?>">
    <button class="btn" type="submit">Update</button>
</form>
<?= view('layout/footer_dark') ?>