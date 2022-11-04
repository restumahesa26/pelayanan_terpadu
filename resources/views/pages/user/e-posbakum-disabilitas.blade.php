<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>E-PTSP | E-Posbakum</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-pelayanan-disabilitas.jpg') }}');
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
        .top {
            position: absolute;
            top: 5px;
            right: 30px;
        }
	</style>

	<link href="{{ url('frontend/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-7">
                    <div class="" style="position: absolute; bottom: 4%;">
                        <div class="d-flex justify-content-start align-items-center">
                            <h3 style="color: #fff; font-size: 24px;">Klik tombol disamping</h3>
                            <a href="{{ $link != '' ? $link->link : '#' }}" target="_blank">
                                <img src="{{ url('frontend/bg-permohonan-voluntair.png') }}" alt="" width="400">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top">
                <a href="{{ route('e-posbakum-2') }}">
                    <img src="{{ url('frontend/btn-kembali-3.png') }}" alt="" width="80">
                </a>
            </div>
		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>

</html>
