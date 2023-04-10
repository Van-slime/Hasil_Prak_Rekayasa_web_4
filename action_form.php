<?php
$nim=$_POST["no_mhs"];
$nama_mhs=$_POST["nama"];
if($_POST["rbjk"]=="p"){
    $jk="Pria";
}else if($_POST["rbjk"]=="ts"){
    $jk="Transformer";
}
else{
    $jk="Wanita";
}
$jur=$_POST["cbjurusan"];
$tgl_lahir=$_POST["tgl"];
$email=$_POST["email"];

echo"NIM Saya : ".$nim."</br>";
print("Nama Saya : ".$nama_mhs."<br>");
print("Email Saya : ".$email."<br>");
print("Jenis Kelamin : ".$jk."<br>");
print("Jurusan Saya : ".$jur."<br>");
print("Tanggal Lahir Saya : ".$tgl_lahir."<br>");

?>
