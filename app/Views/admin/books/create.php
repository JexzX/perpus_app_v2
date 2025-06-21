<?=view('layout/header')?>
<h2>Add Book</h2>
<form action="/admin/books/store" method="post">
    <input name="title" placeholder="Title" required><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <button type="submit">Save</button>
</form>
<?=view('layout/footer')?>