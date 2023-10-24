<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <center>
        <h1>Edit data mahasiswa</h1>
    </center>
    <?php foreach($mahasiswa as $u){ ?>
        <form action="<?php echo base_url(). '/kampus/update'; ?>" method="post" enctype="multipart/form-data">
            <table style="margin:20px auto;">
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nim" value="<?php echo $u->nim ?>">
                    </td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $u->alamat ?>">
                    </td>
                </tr>
                <tr>
                    <td>pekerjaan</td>
                    <td>
                        <input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
                    </td>
                </tr>
                <tr>
                    <td><img src="<?php echo base_url() ?><?php echo $u->foto ?>" width="50" height="50"></td>
                </tr>
                <tr>
                    <td>Upload Foto</td>
                    <td>
                        <input type="file" name="foto">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="update">
                    </td><?php anchor('kampus','<input type=button value=kembali'); ?>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>
</html>