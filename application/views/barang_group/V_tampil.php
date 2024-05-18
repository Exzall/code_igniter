<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <th>No</th>
            <th>Nama Group</th>
        <?PHP 
            $no=0;
            foreach($barang_group as $data){ ?>
            <tr>
                <td><?PHP $no++;?></td>
                <td><?PHP echo $data->Nama; ?></td>
            </tr>
        <?PHP };?>
        </table>
    </body>
</html>