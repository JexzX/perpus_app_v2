<?= view('layout/header_dark') ?>
<h2>Dashboard</h2>
<h3>Available Books</h3>
<?php foreach($books as $b): ?>
<div class="card">
    <div class="card-title"><?= esc($b['title']) ?></div>
    <p><?= esc($b['description']) ?></p>
</div>
<?php endforeach ?>
<h3>Registered Members</h3>
<table>
    <tr>
        <th>No</th>
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