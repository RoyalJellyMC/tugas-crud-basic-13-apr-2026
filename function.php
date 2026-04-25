<?php
require "konek.php";
function tampil(){
    global $konek;
    $query = "SELECT*FROM anggota";
    $data = mysqli_query($konek,$query);
    return $data;
}
function tambah($nama, $status){
    global $konek;
    $query = "INSERT INTO anggota (id, nama, status)
    VALUES ('', '$nama', '$status')";
    $data = mysqli_query($konek,$query);
    return mysqli_affected_rows($konek);
}
function tampilUpdate($id){
    global $konek;
    $query = "SELECT*FROM anggota WHERE id='$id'";
    $data = mysqli_query($konek,$query);
    return $data;
}
function update($id,$nama,$status){
    global $konek;
    $query = "UPDATE anggota
    SET nama='$nama', status='$status'
    WHERE id='$id'";
    mysqli_query($konek,$query);
    return mysqli_affected_rows($konek);
}
function hapus($id){
    global $konek;
    $query = "DELETE FROM anggota WHERE id='$id'";
    mysqli_query($konek,$query);
    return mysqli_affected_rows($konek);
}
// © 2026 M. Faruq Thoriqul Haq
?>