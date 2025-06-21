<?= view('layout/header_dark') ?>
<h2>Edit Book</h2>
<form action="/admin/books/update/<?= $book['id'] ?>" method="post">
    <input name="title" value="<?= esc($book['title']) ?>" required>
    <textarea name="description"><?= esc($book['description']) ?></textarea>
    <button class="btn" type="submit">Update</button>
</form>
<?= view('layout/footer_dark') ?>