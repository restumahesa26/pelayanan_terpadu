<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>E-PTSP | Disabilitas / Kaum Renta</title>
    <style>
        body {
            background-image: url('{{ url('frontend/bg-fasilitas.jpg') }}');
            height: 100% !important;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            font-size: 40px !important;
            color: #fff !important;
        }

        .jenis-layanan {
            position: absolute;
            right: 0;
            margin-right: 120px;
            margin-top: 10px;
        }
    </style>

    <link href="{{ url('frontend/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column" style="margin-top: 100px;">
            <div class="row">
                <div class="col-md-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ url('frontend/carousel-1.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ url('frontend/carousel-2.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ url('frontend/carousel-3.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ url('frontend/carousel-4.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ url('frontend/carousel-5.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ url('frontend/carousel-6.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ url('frontend/carousel-7.jpg') }}" class="d-block w-100" alt="..." style="height: 370px;">
                          </div>
                        </div>
                       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <div class="" style="position: absolute; top: 7px; left: 3%;">
                <a href="{{ route('disabilitas') }}">
                    <img src="{{ url('frontend/btn-kembali-3.png') }}" alt="" width="70">
                </a>
            </div>
        </div>
    </main>
    <audio src="{{ url('frontend/fasilitas-disabilitas.wav') }}" type="audio/wav" autoplay hidden loop></audio>
    <script src="{{ url('frontend/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
