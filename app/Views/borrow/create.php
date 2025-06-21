<?=view('layout/header')?>
<h2>Borrow Book</h2>
<form action="/borrow/store" method="post">
    <select name="book_id" required>
        <?php foreach($books as $b): ?>
        <option value="<?=$b['id']?>"><?=esc($b['title'])?></option>
        <?php endforeach ?>
    </select><br><br>
    <select name="durasi">
        <option value="1">1 day</option>
        <option value="3">3 days</option>
        <option value="7">1 week</option>
        <option value="21">3 weeks</option>
        <option value="30">1 month</option>
    </select><br><br>
    <button type="submit">Borrow</button>
</form>
<?=view('layout/footer')?>