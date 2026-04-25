<!DOCTYPE html>
<html>
    <?php
    require "function.php";
    if(isset($_POST["tambah"])){
        $nama = $_POST['nama'];
        $status = $_POST['status'];
        $hasil = tambah($nama, $status);
        if($hasil>0){
            header("Location:beranda.php");
        }
    }
    ?>
    <form action="" method="post">
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="status">status</label>
        <select name="status" id="status">
            <option value="mama">mama</option>
            <option value="papa">papa</option>
            <option value="anak">anak</option>
        </select>
        <br>
        <button name="tambah">tambah</button>
    </form>
</html>