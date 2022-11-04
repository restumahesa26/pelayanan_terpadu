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

	<title>E-PTSP | Sikomo Dua</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-sikomo-2.jpg') }}');
			height: 100% !important;
            background-position: top;
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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="" style="position: absolute; bottom: 6%; right: 15%;">
                <a href="sms:+628116884646" target="_blank">
                    <img src="{{ url('frontend/btn-sikomo-sms.png') }}" alt="" width="100">
                </a>
                <a href="https://wa.me/628116884646" target="_blank">
                    <img src="{{ url('frontend/btn-sikomo-wa.png') }}" alt="" width="100">
                </a>
            </div>
            <div class="" style="position: absolute; top: 7px; left: 3%;">
                <a href="{{ route('informasi-pengaduan') }}">
                    <img src="{{ url('frontend/btn-kembali-3.png') }}" alt="" width="70">
                </a>
            </div>
			<audio src="{{ url('frontend/tilang.wav') }}" type="audio/wav" autoplay hidden loop></audio>
		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>

</html>
