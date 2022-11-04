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

	<title>E-PTSP | Layanan</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-layanan.jpg') }}');
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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row justify-content-center" style="margin-top: 120px;">
				<div class="col-7">
					<a href="{{ route('umum') }}">
                        <img src="{{ url('frontend/btn-umum.png') }}" alt="" width="400">
                    </a><br>
                    <a href="{{ route('pidana') }}">
                        <img src="{{ url('frontend/btn-pidana.png') }}" alt="" width="400">
                    </a><br>
                    <a href="{{ route('perdata') }}">
                        <img src="{{ url('frontend/btn-perdata.png') }}" alt="" width="400">
                    </a><br>
                    <a href="{{ route('hukum') }}">
                        <img src="{{ url('frontend/btn-hukum.png') }}" alt="" width="400">
                    </a><br>
                    <a href="{{ route('informasi-pengaduan') }}">
                        <img src="{{ url('frontend/btn-informasi-pengaduan.png') }}" alt="" width="400">
                    </a><br>
                    <a href="{{ route('e-posbakum') }}" target="_blank">
                        <img src="{{ url('frontend/btn-posbakum.png') }}" alt="" width="400">
                    </a><br>
                    <a href="{{ route('disabilitas') }}">
                        <img src="{{ url('frontend/btn-disabilitas.png') }}" alt="" width="400">
                    </a>
				</div>
                <div class="col-3">
                    <img src="{{ url('frontend/layanan.gif') }}" alt="" class="d-none d-md-block" width="500" style="position: absolute; right: 250px; bottom: 0;">
                </div>
				<div class="col-2">
					<div class="d-flex justify-content-end">
						<a href="tel:+6282163480130" target="_blank">
							<img src="{{ url('frontend/btn-telp.png') }}" alt="" width="120">
						</a>
					</div>
					<div class="d-flex justify-content-end">
						<a href="https://wa.me/6282163480130" target="_blank">
							<img src="{{ url('frontend/btn-vc.png') }}" alt="" width="120">
						</a>
					</div>
                    <div class="d-flex justify-content-end">
						<a href="https://wa.me/6282163480130" target="_blank">
							<img src="{{ url('frontend/btn-wa.png') }}" alt="" width="120">
						</a>
					</div>
				</div>
			</div>
			<audio src="{{ url('frontend/layanan.wav') }}" type="audio/wav" autoplay hidden loop></audio>
		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>
</html>
