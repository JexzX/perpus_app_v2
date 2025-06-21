<?= view('layout/header_dark') ?>
<h2>Borrow Reports</h2>
<table>
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Role</th>
        <th>Book</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th>Action</th>
    </tr>
    <?php $i=1; foreach($data as $d): ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= esc($d['username']) ?></td>
        <td><?= ucfirst($d['role']) ?></td>
        <td><?= esc($d['title']) ?></td>
        <td><?= $d['tanggal_pinjam'] ?></td>
        <td><?= $d['tanggal_kembali'] ?></td>
        <td>
            <?php if(session()->get('role')=='admin'): ?>
            <a class="btn" href="/reports/edit/<?= $d['id'] ?>">Edit</a>
            <a class="btn delete" href="/reports/delete/<?= $d['id'] ?>" onclick="return confirm('Sure?')">Delete</a>
            <?php else: echo '-'; endif ?>
        </td>
    </tr>
    <?php endforeach ?>
</table>
<?= view('layout/footer_dark') ?>