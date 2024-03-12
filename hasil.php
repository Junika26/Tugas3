<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg-warning text-dark col-md-12 p-5" >
    <?php 

require_once 'model.php';

if(!isset($_POST['submit'])){
    header("Location: halaman_utama.php");
    exit;}

    $proses = $_POST["submit"];
    $nama_mahasiswa = $_POST ["nama"];
    $matkul = $_POST ["matakuliah"];
    $capaianuts = $_POST ["nilai_uts"]; 
    $capaianuas = $_POST ["nilai_uas"];
    $capaiantugas = $_POST["nilai_tugas"];
    $hasil_akhir = ($capaianuts + $capaianuas + $capaiantugas) / 3;


    echo 'Nama Siswa : '. $nama_mahasiswa;
    echo '<br> Pelajaran yang diambil : '. $matkul;
    echo '<br>Capaian Uts  : '. $capaianuts;
    echo '<br>Capaian Uas : '. $capaianuas;
    echo '<br>Capaian Tugas : '. $capaiantugas;
    echo '<br> Capaian Nilai Rata-Rata :' . $hasil_akhir;
    echo '<br> Pengetahuan pelajaran ini : '. pengetahuan($hasil_akhir);
    echo '<br>Grade: '. nilai($hasil_akhir);
    echo '<br>DINYATAKAN :'. Lulus($hasil_akhir);
   

?> 
    </div>

</body>
</html>