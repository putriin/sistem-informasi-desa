<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Desa</title>
    <style>
        .sekilas-info {
            margin:20px 80px;
            display: inline-block;
            background-color: #ddd;
            width: 90%;
            height: 40px;
        }

        .sekilas-info h4{
            display: inline-block;
            padding: 10px 20px;
        }
        
        .sekilas-info span{
            padding : 11px;
            background-color: blue;
        }

        .cara{
            margin: 40px auto;
            text-align: center;
        }


        .formulir{
            margin: 40px;
            display: flex;
            height :500px;
        }

        .form{
            display :flex;
            border: solid;
            margin: 20px;
            height: 200px;
            width: 300px;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<?php include 'asset/header.html';?>

<div class="sekilas-info">
    <span><h4>Sekilas Info</h4></span>
    <h4>Lorem, ipsum.</h4>
</div>


<h2 class="cara">Cara Kerja Formulir</h2>

<div class="formulir">
    <div class="form">
        <img src="" alt="">
        <h4>Kartu Tanda Penduduk</h4>
        <p>Persyaratan dan Formulir</p>
    </div>
    <div class="form">
        <img src="" alt="">
        <h4>Kartu Keluarga</h4>
        <p>Persyaratan dan Formulir</p>
    </div>
    <div class="form">
        <img src="" alt="">
        <h4>Akta Kelahiran</h4>
        <p>Persyaratan dan Formulir</p>
    </div>
    <div class="form">
        <img src="" alt="">
        <h4>Akta Kematian</h4>
        <p>Persyaratan dan Formulir</p>
    </div>
</div>
</body>
</html>