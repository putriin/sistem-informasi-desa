<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Desa</title>
    <style>
    body {
        width: 100%;
        overflow-x: hidden;
        color: black;
    }

    .sekilas-info {
        margin: 20px 80px;
        display: inline-block;
        background-color: #ddd;
        width: 90%;
        height: 40px;
    }

    .sekilas-info h4 {
        display: inline-block;
        padding: 10px 20px;
    }

    .sekilas-info span {
        padding: 11px;
        background-color: blue;
    }

    .cara {
        margin: 40px auto;
        text-align: center;
    }

    .formulir {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        overflow-x: auto;
        /* Mengizinkan scroll horizontal jika perlu */
    }

    .form {
        text-align: center;
        border: 1px solid #ddd;
        padding: 20px;
        flex-basis: 20%;
    }

    .form img {
        display: block;
        margin: 0 auto;
        cursor: pointer;
        /* Menambahkan cursor pointer untuk menandakan bahwa gambar dapat diklik */
    }

    .form h4,
    .form p {
        margin-top: 15px;
        margin-bottom: 10px;
        color: black;
    }

    /* Perubahan warna teks saat dihover */
    .form a:hover h4,
    .form a:hover p {
        color: plum;
    }
    </style>
</head>

<body>
    <?php include 'asset/header.html';?>

    <div class="sekilas-info">
        <span>
            <h4>Sekilas Info</h4>
        </span>
        <h4>Lorem, ipsum.</h4>
    </div>

    <h2 class="cara">Cara Kerja Formulir</h2>

    <div class="formulir">
        <div class="form">
            <a href="page_ktp.php">
                <img src="img/contoh2.png" alt="KTP" width="170">
                <h4>Kartu Tanda Penduduk</h4>
                <p>Persyaratan dan Formulir</p>
            </a>
        </div>
        <div class="form">
            <a href="page_kk.php">
                <img src="img/contoh.png" alt="KK" width="170">
                <h4>Kartu Keluarga</h4>
                <p>Persyaratan dan Formulir</p>
            </a>
        </div>
        <div class="form">
            <a href="page_akta_kelahiran.php">
                <img src="img/contoh3.png" alt="Akta Kelahiran" width="170">
                <h4>Akta Kelahiran</h4>
                <p>Persyaratan dan Formulir</p>
            </a>
        </div>
        <div class="form">
            <a href="page_akta_kematian.php">
                <img src="img/contoh4.jpg" alt="Akta Kematian" width="170">
                <h4>Akta Kematian</h4>
                <p>Persyaratan dan Formulir</p>
            </a>
        </div>
    </div>
</body>

</html>