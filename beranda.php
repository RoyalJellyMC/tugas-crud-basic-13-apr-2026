<?php
require "function.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table,tr,td{
                border : 1px solid black;
                border-collapse : collapse;
            }
            td{
                padding : 1em;
            }
        </style>
    </head>
    <body>
        <div>
            <button><a href="tambah.php">tambah</a></button>
        </div>
        <table>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>status</td>
                <td>aksi</td>
            </tr>
            <?php
            $data = tampil();
            while($baris=mysqli_fetch_assoc($data)):
            ?>
            <tr>
                <td><?php echo $baris["id"]; ?></td>
                <td><?php echo $baris["nama"]; ?></td>
                <td><?php echo $baris["status"]; ?></td>
                <td>
                    <button><a href="update.php?id=<?php echo $baris["id"]?>">edit</button>
                    <button><a href="hapus.php?id=<?php echo $baris["id"]?>">hapus</button>
                </td>
            </tr>
            <?php endwhile;?>
        </table>
        <p>© 2026 M. Faruq Thoriqul Haq</p>
    </body>
</html>
<!-- © 2026 M. Faruq Thoriqul Haq -->