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

	<title>E-PTSP | Perdata</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-perdata.jpg') }}');
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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container-fluid d-flex flex-column">
			<div class="row justify-content-center" style="margin-top: 120px;">
				<div class="col-10">
					<div class="row">
						<div class="col-md-8">
							<a href="{{ $link1 != '' ? $link1->link : '#' }}">
								<img src="{{ url('frontend/btn-perdata-1.png') }}" alt="">
							</a><br>
							<a href="{{ $link2 != '' ? $link2->link : '#' }}">
								<img src="{{ url('frontend/btn-perdata-2.png') }}" alt="" style="margin-top: -40px">
							</a><br>
						</div>
						<div class="col-md-4">
							<img src="{{ url('frontend/perdata.gif') }}" alt="" class="d-none d-md-block" width="500" style="position: absolute; right: 150px; bottom: 0;">
						</div>
					</div>
				</div>
				<div class="col-2" style="margin-top: 100px;">
					<div class="d-flex justify-content-end">
						<a href="tel:+6282163480130">
							<img src="{{ url('frontend/telepon.png') }}" alt="" width="100">
						</a>
					</div>
					<div class="d-flex justify-content-end">
						<a href="https://wa.me/6282163480130">
							<img src="{{ url('frontend/wa.png') }}" alt="" width="100">
						</a>
					</div>
				</div>
			</div>
			<a href="{{ route('layanan') }}" style="position: absolute; bottom: 0; left: 0;">
				<img src="{{ url('frontend/btn-kembali.png') }}" alt="">
			</a>
		</div>
		<audio src="{{ url('frontend/perdata.wav') }}" type="audio/wav" autoplay hidden loop></audio>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>
</html>
