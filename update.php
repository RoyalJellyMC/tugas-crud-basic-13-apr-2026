<!DOCTYPE html>
<html>
    <?php
    require "function.php";
    $id = $_GET["id"];

    if(isset($_POST["update"])){
        $nama = $_POST['nama'];
        $status = $_POST['status'];
        $hasil = update($id, $nama, $status);
        if($hasil>0){
            header("Location:beranda.php");
        }
    }
    ?>

    <?php
        $tampil = tampilUpdate($id);
        while($baris=mysqli_fetch_assoc($tampil)):
    ?>
    <form action="" method="post">
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama" value="<?php echo $baris["nama"]; ?>">
        <br>
        <label for="status">status</label>
        <select name="status" id="status">
            <option value="mama" <?php echo ($baris["status"]==="mama")?"selected":""; ?>>mama</option>
            <option value="papa" <?php echo ($baris["status"]==="papa")?"selected":""; ?>>papa</option>
            <option value="anak" <?php echo ($baris["status"]==="anak")?"selected":""; ?>>anak</option>
        </select>
        <br>
        <button name="update">update</button>
    </form>
<?php endwhile;?>
</html>