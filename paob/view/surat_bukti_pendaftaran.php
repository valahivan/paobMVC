<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Bukti Daftar <?= $data->nama ?></title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        padding: 40px;
    }

    .container .main-header table{
        width: 100%;
    }

    .container .main-header table td{
        text-align: center;
    }

    .container .main-header table td .logo{
        margin-top: 10px;
    }

    .container .main-header .info h2, h3{
        text-transform: uppercase;
    }

    .container .main-header .info h2:nth-child(2){
        color: #0000ff;
        margin-top: 10px;
    }

    .container .main-header .info h3{
        font-weight: 400;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    .container .main-header .info p{
        font-size: 14px;
    }

    .container .logo h6{
        margin-top: 15px;
    }

    .container hr{
        border: 3px solid black;
        margin-top: 18px;
    }

    .title{
        text-align: center;
        text-transform: uppercase;
        background-color: #361509;
        color: white;
        padding: 3px;
        margin-top: 30px;
        margin-bottom: 28px;
        font-weight: 500;
    }

    .table-data tr td{
        font-size: 18px;
        padding: 3px;
    }

    .table-info{
        width: 100%;
        border-spacing: 0;
        border-collapse: collapse;
    }

    .table-info th, .table-info td{
        padding: 10px 15px;
        font-family: Arial, Helvetica, sans-serif;
        border: 2px solid #c0c0c0;
        text-align: center;
        font-size: 17px;
    }

    .table-info th{
        background-color:#3e180b;
        color: white;
    }

    .table-info td{
        background-color:#e4e4e4;
    }

</style>
<body>
    <div class="container">
    <header class="main-header">
        <table>
            <td>
            <div class="logo">
            <?php 
                $imagePath = __DIR__ . '../../public/img/Logo OSIS.jpg';
                $imageOsis = base64_encode(file_get_contents($imagePath));
                $imageTagOsis = '<img src="data:imag/jpg;base64,' . $imageOsis . '" width="80px">';
                echo $imageTagOsis;
            ?>
            <h6>OSIS SMK SAMUDRA</h6>
            </div>
            </td>
            <td>
                <div class="info">
                <h2>panitia penerimaan anggota osis baru</h2>
                <h2>osis smk samudra</h2>
                <h3>tahun ajaran 2025 /2026</h3>
                <p>Alamat: Jl. Cisolok-Cipanas, Cisolok.Kec. Cisolok, Kabupaten SUkabumi Kode Pos 43366 <br>
                Telp : 085795895731 Instagram: @osissmksamudra Tiktok: @ossadra</p>
                </div>
            </td>
        </table>
    </header>
    <hr>
    <h3 class="title">bukti pendaftaran anggota osis baru</h3>
    <table class="table-data">
        <tr>
            <td>No Pendaftaran</td>
            <td>:</td>
            <td>OSSAM0012</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?= ucwords($data->nama) ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?= $data->gender?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $data->kelas?></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>:</td>
            <td><?= $data->no_hp ?></td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td><?= date('d/m/Y', strtotime($data->tanggal));?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><h4>SUDAH DAFTAR</h4></td>
        </tr>
        <tr>
            <td>Alasan Mengikuti OSIS</td>
            <td>:</td>
            <td><?= $data->alasan ?></td>
        </tr>
    </table>
    
    <h4 style="margin: 20px; text-align:center;">SMK Samudra, <?= date('d F Y', strtotime($data->tanggal)); ?></h4>

    <table class="table-info">
        <tr>
            <th>Panitia PAOB</th>
            <th></th>
            <th>Nama Pendaftar</th>
        </tr>
        <tr>
            <td>OSIS SMK SAMUDRA</td>
            <td></td>
            <td><?= ucwords($data->nama) ?></td>
        </tr>
    </table>
    </div>
</body>
</html>