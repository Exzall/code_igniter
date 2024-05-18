<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php echo base_url('index.php/Welcome/send_data');?>"  method="post" class="form">
            <label for="nim"></label> NIM
            <input type="text" name="nim"><br>
            <label for="nama"></label>Nama
            <input type="text" name="nama"><br>
            <label for="prodi"></label>Prodi
            <input type="text" name="prodi"><br><br>
            <input type="submit" value="KIRIM">
            
        </form>
    </body>
</html>