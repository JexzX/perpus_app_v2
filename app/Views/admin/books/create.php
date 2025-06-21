<?= view('layout/header_dark') ?>
<h2>Add New Book</h2>
<form action="/admin/books/store" method="post">
    <input name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button class="btn" type="submit">Save</button>
</form>
<?= view('layout/footer_dark') ?>