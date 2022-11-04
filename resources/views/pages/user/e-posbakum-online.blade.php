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
			background-image: url('{{ url('frontend/bg-pelayanan-online.jpg') }}');
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
		<div class="container-fluid d-flex flex-column" style="margin-left: 20px; margin-right: 20px;">
			<p style="margin-top: 100px;"></p>
			<div class="row justify-content-center mt-5">
				<div class="col-md-6">
					<h2 style="color: #fff; font-size: 24px; font-weight: bold;">Pelayanan online / Sarana Konsultasi Hukum Gratis Bagi Masyarakat ( SAKHTIMAS ) adalah pelayanan hukum dari Posbakum Pengadilan Negeri Langsa yang diberikan bagi masyarakat melalui sambungan telepon, whatsapp, sms, instagram, facebook dan email.</h2>
				</div>
				<div class="col-md-6">
					<h2 style="color: #fff; font-size: 24px; font-weight: bold;">Merupakan sarana konsultasi hukum secara online yang disediakan oleh Pengadilan Negeri Langsa bagi Masyarakat yang membutuhkan pelayanan pemberian solusi dan / atau informasi permasalahan hukum maupun kebutuhan lainnya yang berkaitan dengan hukum yang diberikan oleh petugas.</h2>
				</div>
				<div class="col-md-12 text-center mt-3">
					<h2 style="color: #fff; font-size: 30px; font-weight: bold;">Silahkan pilih media layanan konsultasi online yang diinginkan</h2>
				</div>
				<div class="col-md-6">
					<div class="row justify-content-center text-center">
						<div class="col-md-4">
							<a href="tel:+62{{ $link1 != '' ? $link1->link : '#' }}">
								<img src="{{ url('frontend/telp.png') }}" alt="" srcset="" width="120">
							</a>
						</div>
						<div class="col-md-4">
							<a href="sms:+62{{ $link2 != '' ? $link2->link : '#' }}">
								<img src="{{ url('frontend/sms.png') }}" alt="" srcset="" width="120">
							</a>
						</div>
						<div class="col-md-4">
							<a href="{{ $link3 != '' ? $link3->link : '#' }}">
								<img src="{{ url('frontend/wa-2.png') }}" alt="" srcset="" width="120">
							</a>
						</div>
						<div class="col-md-4">
							<h3 style="color: #fff;">Telpon</h3>
						</div>
						<div class="col-md-4">
							<h3 style="color: #fff;">SMS</h3>
						</div>
						<div class="col-md-4">
							<h3 style="color: #fff;">Whatsapp</h3>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row justify-content-center text-center">
						<div class="col-md-4">
							<a href="{{ $link4 != '' ? $link4->link : '#' }}">
								<img src="{{ url('frontend/fb.png') }}" alt="" srcset="" width="120">
							</a>
						</div>
						<div class="col-md-4">
							<a href="{{ $link5 != '' ? $link5->link : '#' }}">
								<img src="{{ url('frontend/ig.png') }}" alt="" srcset="" width="120">
							</a>
						</div>
						<div class="col-md-4">
							<a href="mailto:{{ $link6 != '' ? $link6->link : '#' }}">
								<img src="{{ url('frontend/email.png') }}" alt="" srcset="" width="120">
							</a>
						</div>
						<div class="col-md-4">
							<h3 style="color: #fff;">Facebook</h3>
						</div>
						<div class="col-md-4">
							<h3 style="color: #fff;">Instagram</h3>
						</div>
						<div class="col-md-4">
							<h3 style="color: #fff;">Email</h3>
						</div>
					</div>
				</div>
			</div>
			<div>
				<a href="{{ route('e-posbakum-2') }}" style="position: absolute; bottom: 0; right: 2%;">
					<img src="{{ url('frontend/btn-kembali-3.png') }}" alt="" width="100">
				</a>
			</div>
		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>

</html>
