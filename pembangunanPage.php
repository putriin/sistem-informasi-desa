<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        padding: 0;
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
        background-color: blue
    }

    .sekilas-info span {
        padding: 11px;
    }


    /* header {
        padding: 1rem;
        border-bottom: 1px solid #ddd;
    }



    main {
        padding: 2rem 0;
    }

    #construction-projects {
        margin-bottom: 2rem;
    }

    .project {
        margin-bottom: 1rem;
        border-bottom: 1px solid #ddd;
        padding-bottom: 1rem;
    }

    .project h3 {
        color: #4CAF50;
        margin-bottom: 0.5rem;
    }

    #more-info a {
        display: block;
        background-color: #4CAF50;
        color: #fff;
        padding: 0.5rem 1rem;
        text-align: center;
        text-decoration: none;
    } */

    .card-img-top {
        border-radius: 50px;
        padding: 20px;
    }

    .card {
        border-radius: 30px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
    }

    .card-body {
        padding: 25px;
        margin-top: -15px;
    }

    .btn-primary {
        border-radius: 50px;
        width: 120px;
    }

    .btn-primary:hover {
        background-color: black;
        border: none;
    }

    h3,
    h5 {
        color: rgb(0, 91, 228);
    }
    </style>
</head>

<body>
    <div class="container">
        <?php include 'asset/header.html'; ?>

        <div class="sekilas-info">
            <h4>Sekilas Info</h4>
            <span>Lorem, ipsum.</span>
        </div>

        <div class="container py-5">
            <h1 class="text-center">Pembangunan</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

                <div class="col">
                    <div class="card">
                        <img src="img/p.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PEMBANGUNAN MASJID</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/p1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PEMBANGUNAN POS RONDA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/p2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PEMBANGUNAN JEMBATAN</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">

                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/p3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PEMBANGUNAN MUSHOLA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">

                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/p4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PEMBANGUNAN MASJID</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="img/p5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PEMBANGUNAN</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>\