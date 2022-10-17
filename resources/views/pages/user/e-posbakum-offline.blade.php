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
			background-image: url('{{ url('frontend/bg-pelayanan-offline.jpg') }}');
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
		<div class="container d-flex flex-column">
			<img src="{{ url('frontend/loading-3.gif') }}" alt="" width="150" style="margin-left: 22%; margin-top: 30px;">
			<div class="d-flex justify-content-center mt-5">
				<h2 style="color: #fff; font-size: 30px;">Pelayanan secara offline adalah pelayanan hukum yang diberikan bagi masyarakat yang datang langsung ke Posbakum di Pengadilan Negeri Langsa. Masyarakat dapat menemui petugas piket pada Posbakum Pengadilan Negeri Langsa untuk mendapatkan layanan segera.</h2>
			</div>
			<div class="row mt-5">
				<div class="col-md-8">
					<h2 style="color: #fff; font-size: 30px;">Untuk informasi lebih lanjut. Silahkan download brosur ataupun hubungi petugas.</h2>
				</div>
				<div class="col-md-4">
					<a href="{{ url('posbakum.pdf') }}">
						<img src="{{ url('frontend/btn-download.png') }}" alt="" width="200">
					</a>
				</div>
			</div>
			<div>
				<a href="{{ route('e-posbakum-2') }}" style="position: absolute; bottom: 0; right: 0;">
					<img src="{{ url('frontend/btn-kembali-2.png') }}" alt="" width="200">
				</a>
			</div>
		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>

</html>
