<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data mahasiswa</title>
</head>
<body>
    <center>
        <h1>Input Data Mahasiswa</h1>
    </center>
</body>
<form action="<?php echo base_url().'index.php/kampus/tambah_aksi';?>"method="post" enctype="multipart/form-data">
<table style="margin:20px auto;">
<tr>
    <td>NIM</td>
    <td><input type ="text" name ="nim"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name ="nama"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name ="alamat"></td>
</tr>
<tr>
    <td>Pekerjaan</td>
    <td><input type="text" name ="pekerjaan"></td>
</tr>
</tr>
<tr>
    <td>Upload Foto</td>
    <td><input type="file" name ="foto"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="tambah"> <input type="reset" value="batal">
<?php echo anchor('kampus/index','<input type=button value=kembali>');?></td>
</tr>
</table>
</form>
</html>