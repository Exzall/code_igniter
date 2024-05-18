<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>input data</title>
    </head>
    <body>
        <table align="center">
            <form action="<?php echo base_url('index.php/C_barang_group/Insert');?>" method="post">
                <tr>
                    <td style="text-align: center;">BARANG</td>
                </tr>
                <tr>
                    <td>
                        <label for="id_barang">Nama Barang</label>
                        <input type="text" name="Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SIMPAN">
                        <input type="reset" value="BATAL">
                    </td>
                </tr>
            </form>
        </table>
        <!--Menampilkan Dialog-->
            <?PHP 
                if($this->session->userdata('simpan_data')!='')
                {
            ?>
                <script>
                    window.alert("Data Berhasil di Simpan");
                </script>
                <!--Untuk Clear Session-->
            <?PHP $this->session->unset_userdata('simpan_data');
                };
            ?>
        <!--END-->
    </body>
</html>