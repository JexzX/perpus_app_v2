<?=view('layout/header')?>
<h2>Edit Book</h2>
<form action="/admin/books/update/<?=$book['id']?>" method="post">
    <input name="title" value="<?=esc($book['title'])?>" required><br><br>
    <textarea name="description"><?=esc($book['description'])?></textarea><br><br>
    <button type="submit">Update</button>
</form>
<?=view('layout/footer')?>