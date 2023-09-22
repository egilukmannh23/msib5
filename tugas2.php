<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">

        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan" id="pekerjaan">
            <option value="Petani">Petani</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Caleg">Caleg</option>
            <option value="Dosen">Dosen</option>
            <option value="Direktur">Direktur</option>
            <option value="Analis">Analis</option>
            <option value="Marketing">Marketing</option>
            <option value="Sales">Sales</option>
            <option value="Rektor">Rektor</option>
        </select>
        <br>

       <br> <label>Hobby:</label><br>
       <input type="radio" name="hobby" value="Sepak Bola"> Sepak Bola <br>
       <input type="radio" name="hobby" value="Basket"> Basket <br>
       <input type="radio" name="hobby" value="Membaca"> Membaca <br>
       <input type="radio" name="hobby" value="Renang"> Renang <br>
       <input type="radio" name="hobby" value="Cricket"> Cricket <br>
       <input type="radio" name="hobby" value="Hoki"> Hoki <br>
       <input type="radio" name="hobby" value="Billiard"> Billiard <br>
       <input type="radio" name="hobby" value="Badminton"> Badminton <br>
       <input type="radio" name="hobby" value="Lempar lembing"> Lempar lembing <br>
       <input type="radio" name="hobby" value="Volli"> Volli <br>

        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];

        echo '<br>';
        echo '<table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>' . $nama . '</td>
                    <td>' . $pekerjaan . '</td>
                    <td>' . $hobby . '</td>
                </tr>
              </table>';
    }
    ?>
</body>
</html>