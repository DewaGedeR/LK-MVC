<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br>
    <a href="<?= BASE_URL.'index.php?r=home/insertbarang' ?>" class="btn btn-primary">Tambah Barang</a>
    <br></br>
    <table class="table">
        <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th></th>
                </tr>
        </thead>
        <?php foreach ($data as $item):?> 
            <tr scope="row">
                <td><?=$item['id']?></td>
                <td><?=$item['nama']?></td>
                <td><span class="badge text-bg-<?= $item['qty']>50? 'success' : 'danger'?>"><?=$item['qty']?></span></td>
                <td>
                    <a href="<?= BASE_URL.'index.php?r=home/updatebarang/'.$item['id'] ?>" class="badge text-bg-info">Update</a>
                    <a href="<?= BASE_URL.'index.php?r=home/deletebarang/'.$item['id'] ?>" class="badge text-bg-info" onclick="return confirm('Apakah anda yakin untuk menghapus data?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>