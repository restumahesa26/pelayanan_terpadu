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

	<title>E-PTSP | Disabilitas / Renta</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-disabilitas-2.jpg') }}');
			background-size: cover;
  		    background-repeat: no-repeat;
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
			<h2 style="color: #fff; font-size: 20px;">Pelayanan Khusus Disabilitas / Renta Permohonan Perdata Voluntair adalah pelayanan dalam perkara perdata permohonan voluntair yang khusus diberikan kepada penyandang disabilitas / renta</h2>
      <h2 style="color: #fff; font-size: 20px;">Adapun fasilitas yang diberikan yakni :
      <ol>
        <li style="font-size: 20px;">Konsultasi oleh Posbakum dapat dilakukan dirumah penerima layanan;</li>
        <li style="font-size: 20px;">Persidangan perdata permohonan voluntair dikuasakan secara penuh kepada Posbakum PN Langsa;</li>
        <li style="font-size: 20px;">Pembuatan dokumen permohonan dilakukan secara gratis oleh Posbakum;</li>
        <li style="font-size: 20px;">Pemohon hanya membayar panjar biaya perkara perdata permohonan;</li>
        <li style="font-size: 20px;">Penetapan perdata permohonan diantar langsung kerumah;</li>
      </ol>
      </h2>
      <h2 style="color: #fff; font-size: 20px;">Jika Pemohon Disabilitas  / Renta termasuk kedalam ekonomi lemah dan dapat dibuktikan dengan surat keterangan tidak mampu maka panjar biaya dibiayai oleh Posbakum sepenuhnya;</h2>
      <h2 style="color: #fff; font-size: 20px;">Silahkan persiapkan syarat berkas terlebih dahulu</h2>
      <div class="text-center mt-3">
        <a href="{{ url('panduan-layanan.pdf') }}">
          <img src="{{ url('frontend/btn-download.png') }}" alt="" width="200">
        </a>
		<a href="{{ $link != '' ? $link->link : '#' }}" style="margin-left: 20px;">
          <img src="{{ url('frontend/btn-ajukan.png') }}" alt="" width="300">
        </a>
      </div>
			<a href="{{ route('disabilitas') }}" style="position: absolute; bottom: 0; left: 0;">
				<img src="{{ url('frontend/btn-kembali-2.png') }}" alt="" width="200">
			</a>
		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>
</html>
