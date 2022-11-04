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
			background-image: url('{{ url('frontend/bg-posbakum-2.jpg') }}');
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
        .text-desc {
            color: #fff;
            font-size: 18px;
        }
	</style>

	<link href="{{ url('frontend/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container-fluid d-flex flex-column">
			<div class="row justify-content-start" style="margin-top: 180px;">
				<div class="col-8">
					<div class="row justify-content-start">
						<div class="col-md-4 text-center">
							<a href="{{ route('e-posbakum-offline') }}">
                                <img src="{{ url('frontend/btn-layanan-1.png') }}" alt="" width="130">
                            </a>
                            <p class="text-desc">Pelayanan Secara Offline</p>
						</div>
                        <div class="col-md-4 text-center">
							<a href="{{ route('e-posbakum-disabilitas') }}">
                                <img src="{{ url('frontend/btn-layanan-2.png') }}" alt="" width="130">
                            </a>
                            <p class="text-desc">Layanan Bagi Disabilitas</p>
						</div>
                        <div class="col-md-4 text-center">
							<a href="">
                                <img src="{{ url('frontend/btn-layanan-3.png') }}" alt="" width="130">
                            </a>
                            <p class="text-desc">Layanan Bagi Masyarakat Tidak Mampu</p>
						</div>
                        <div class="col-md-4 text-center">
							<a href="{{ route('e-posbakum-online') }}">
                                <img src="{{ url('frontend/btn-layanan-4.png') }}" alt="" width="130">
                            </a>
                            <p class="text-desc">Pelayanan Secara Online</p>
						</div>
                        <div class="col-md-4 text-center">
							<a href="">
                                <img src="{{ url('frontend/btn-layanan-5.png') }}" alt="" width="130">
                            </a>
                            <p class="text-desc">Daftar Petugas Tiket</p>
						</div>
                        <div class="col-md-4 text-center">
							<a href="">
                                <img src="{{ url('frontend/btn-layanan-6.png') }}" alt="" width="130">
                            </a>
                            <p class="text-desc">Informasi Seputar Posbakum PN Langsa</p>
						</div>
					</div>
				</div>
			</div>
			<a href="{{ route('e-posbakum') }}" style="position: absolute; bottom: 0; right: 3%;">
				<img src="{{ url('frontend/btn-kembali-3.png') }}" alt="" width="120">
			</a>
		</div>
		<audio src="{{ url('frontend/halaman-2-posbakum.wav') }}" type="audio/wav" autoplay hidden loop></audio>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>

</html>
