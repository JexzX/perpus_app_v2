<?= view('layout/header_dark') ?>
<h2>Member List</h2>
<form method="get" action="/users" class="search">
    <input name="q" placeholder="Search members..." value="<?= esc($q) ?>">
    <button class="btn" type="submit">Search</button>
</form>
<table>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Role</th>
    </tr>
    <?php $i=1; foreach($users as $u): ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= esc($u['username']) ?></td>
        <td><?= ucfirst($u['role']) ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?= view('layout/footer_dark') ?>