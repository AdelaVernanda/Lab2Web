<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
   <h2>INPUT</h2>
    <form class="form" method="post" >
            <label>Nama: </label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir: </label>
            <br>
            <input type="date" name="tgl_lahir">
            <br>
            <label>Pekerjaan: </label>
            <br>
            <select name='pekerjaan'>
                <option value="-">---Pilih Pekerjaan---</option>
                <option value='General Manager'>General Manager</option>
                <option value='Content Manager'>Content Manager</option>
                <option value='Head of HRD'>Head of HRD</option>
                <option value='Senior Software Engineer'>Senior Software Engineer</option>
                <option value="CEO">CEO</option>
            </select>
            <br>
            <br>
            <button type="submit">Kirim</button>
    </form>
    <h2>OUTPUT</h2>
    
    <?php
        # Memanggil Nama
        echo 'Nama: ' .@$_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tgl_lahir = @$_POST['tgl_lahir'];

        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);

        # Memanggil fungsi umur yg sudah dibuat diatas
        echo "<br> Umur: ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan: ".@$_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "General Manager"){
            echo '<br> Gaji: Rp. 20.000.000,-';
        }elseif($pekerjaan == "Content Manager"){
            echo '<br> Gaji: Rp. 20.000.000,-';
        }elseif($pekerjaan == "Head of HRD"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "Senior Software Engineer"){
            echo '<br> Gaji: Rp. 25.000.000,-';
        }elseif ($pekerjaan == "CEO"){
            echo '<br> Gaji: Rp. 100.000.000,-';
        }

    ?>
  </body>
</html>