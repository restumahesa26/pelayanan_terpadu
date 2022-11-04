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
			background-image: url('{{ url('frontend/bg-posbakum.jpg') }}');
			background-size: cover;
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
        .bottom {
            position: absolute;
            bottom: 0;
            right: 0;
        }
	</style>

	<link href="{{ url('frontend/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
            <div class="bottom">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('tentang-posbakum') }}">
                        <img src="{{ url('frontend/btn-tentang.png') }}" alt="" srcset="" width="350">
                    </a>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: -30px">
                    <a href="{{ route('e-posbakum-2') }}">
                        <img src="{{ url('frontend/btn-masuk-posbakum.png') }}" alt="" srcset="" width="230">
                    </a>
                </div>
            </div>
		</div>
		<audio src="{{ url('frontend/depan-posbakum.wav') }}" type="audio/wav" autoplay hidden loop></audio>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>

</html>
