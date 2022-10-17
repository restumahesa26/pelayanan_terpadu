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

	<title>Sign In | AdminKit Demo</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-fasilitas.jpg') }}');
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
		<div class="container d-flex flex-column" style="margin-top: 150px;">
      <div class="row">
        <div class="col-md-8">
          <h3 style="color: #fff; font-size: 18px;">Pengadilan Negeri Langsa telah menyediakan berbagai fasilitas bagi penyandang disabilitas / renta seperti : <br>
            <ol>
              <li>Kursi one servis disabilitas / renta</li>
              <li>Buku Layanan braille</li>
              <li>Kacamata baca</li>
              <li>Alat bantu dengar</li>
              <li>Kartu layanan prioritas</li>
              <li>Jalur jalan bagi disabilitas</li>
              <li>Toilet disabilitas</li>
              <li>Parkir khusus disabilitas</li>
              <li>Kursi dan Tongkat disabilitas</li>
              <li>Kursi tunggu sidang disabilitas</li>
              <li>Komputer / table disabilitas</li>
              <li>Pojok snack disabilitas</li>
              <li>Petugas khusus disabilitas</li>
              <li>Website ramah disabilitas</li>
              <li>Posbakum ramah disabilitas</li>
              <li>Layanan perdata permohonan / voluntair khusus disabilitas</li>
            </ol>
          </h3>
        </div>
        <div class="col-md-4">
          <img src="{{ url('frontend/icon-fasilitas.png') }}" alt="" width="400">
        </div>
      </div>
			<div>
				<a href="{{ route('disabilitas') }}" style="position: absolute; bottom: 0; left: 0;">
					<img src="{{ url('frontend/btn-kembali-2.png') }}" alt="" width="200">
				</a>
			</div>
		</div>
	</main>
    <audio src="{{ url('frontend/fasilitas-disabilitas.wav') }}" type="audio/wav" autoplay hidden loop></audio>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>
</html>
