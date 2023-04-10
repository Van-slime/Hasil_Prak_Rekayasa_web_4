<html>
<head>
    <title>Buat Table </title>
</head>
<body>
    <form action="action_form.php" method="post">
        <table border="1">
            <tr>
                <td colspan="3"><h3 align="center">Input Data Mahasiswa</h3></td>
            </tr>
            <tr>
                <td>No Mahasiswa</td><td>:</td><td><input type="text" name="no_mhs" size="15"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td><td>:</td><td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td><td>:</td>
                <td><input type="radio" name="rbjk" value="p">Pria &nbsp; <input type="radio" name="rbjk" value="w">Wanita &nbsp; <input type="radio" name="rbjk" value="ts">Transformer</td>
            </tr>
            <tr>
                <td>Jurusan</td><td>:</td>
                <td><select name="cbjurusan" id="">
                    <option value="pil">Pilih Jurusan</option>
                    <option value="TM">Teknik Mesin</option>
                    <option value="TI">Teknik Industri</option>
                    <option value="TF">Teknik Informatika</option>
                    <option value="TP">Teknik Penerbangan</option>
                    <option value="TE">Teknik Elektro</option>
                </select></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td><td>:</td><td><input type="date" name="tgl" id=""></td>
            </tr>
            <tr>
                <td>email</td><td>:</td><td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Proses"></td>
            </tr>
        </table>
    </form>
</body>
</html>