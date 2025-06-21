<?=view('layout/header')?>
<h2>Borrow Reports</h2>
<table border="1" cellpadding="6">
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Role</th>
        <th>Book</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
    </tr>
    <?php $no = 1; foreach($data as $d): ?>
    <tr>
        <td><?=$no++?></td>
        <td><?=esc($d['username'])?></td>
        <td><?=esc($d['role'])?></td>
        <td><?=esc($d['title'])?></td>
        <td><?=$d['tanggal_pinjam']?></td>
        <td><?=$d['tanggal_kembali']?></td>
    </tr>
    <?php endforeach ?>
</table>
<?=view('layout/footer')?>