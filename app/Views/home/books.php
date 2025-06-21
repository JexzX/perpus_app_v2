<?= view('layout/header_dark') ?>
<h2>Book List</h2>
<form method="get" action="/books" class="search">
    <input name="q" placeholder="Search books..." value="<?= esc($q) ?>">
    <button class="btn" type="submit">Search</button>
</form>
<?php foreach($books as $b): ?>
<div class="card">
    <div class="card-title"><?= esc($b['title']) ?></div>
    <p><?= esc($b['description']) ?></p>
</div>
<?php endforeach ?>
<?= view('layout/footer_dark') ?>