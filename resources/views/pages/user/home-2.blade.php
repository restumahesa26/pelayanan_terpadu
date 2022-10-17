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

	<title>E-PTSP</title>
	<style>
		body {
			background-image: url('{{ url('frontend/bg-1.jpg') }}');
			background-size: cover;
		}
		.btn-tamu {
			position: absolute;
			bottom: 130px;
			right:25%;
			left:50%;
			margin-left:-150px;
			width: 350px !important;
		}
		.loading {
			position: absolute;
			bottom: 120px;
			right:25%;
			left:50%;
			margin-left:-180px;
			width: 60px !important;
		}
		.text-layanan {
			position: absolute;
			bottom: 30px;
		}
	</style>

	<link href="{{ url('frontend/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="d-flex justify-content-center">
				<div class="d-flex justify-content-start">
					<button class="btn btn-primary btn-tamu" id="btn-tamu">
                        Masuk dan Isi Buku Tamu
                    </button>
					<img src="{{ url('frontend/loading-2.gif') }}" alt="" class="loading">
				</div>
				<div class="text-center text-layanan">
					<h5 style="font-size: 16px; color: #fff;">Jam Layanan</h5>
					<h5 style="font-size: 16px; color: #fff;">Senin s.d Kamis Pukul 08.00-16.30 Jumat: Pukul 08.00-17.00 WIB</h5>
					<h5 style="font-size: 16px; color: #fff;">Istirahat : Senin s.d Kamis Pukul 12.30-13.30 Jumat: Pukul 12.30-14.00 WIB</h5>
				</div>
			</div>
		</div>
	</main>
	<audio src="{{ url('frontend/halaman-1.wav') }}" type="audio/wav" autoplay hidden loop></audio>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>
<script type="text/javascript">
    document.getElementById("btn-tamu").onclick = function () {

    const URLS = [
        '{{ route('layanan') }}',
        '{{ $link != '' ? $link->link : '#' }}',
            ];

            for (let i = 0; i < URLS.length; i++) {
                const a = document.createElement('a');

                a.style.display = 'none';
                a.href = URLS[i];
                a.target = '_blank';
                document.body.appendChild(a);

                a.click();
                a.remove();
            }
    };
</script>
</html>
