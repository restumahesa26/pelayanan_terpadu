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
			background-image: url('{{ url('frontend/bg-halaman-depan.jpg') }}');
            height: 100% !important;
            background-position: center;
            background-repeat: no-repeat;
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
        .bottom {
            position: absolute;
            bottom: 0;
            right: 0;
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
        .top {
            align-items: center;
            position: absolute;
            left: 10px;
            top: 10px;
            border: 2px solid #fff;
            border-radius: 10px;
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }
	</style>

	<link href="{{ url('frontend/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
            <div class="top">
                <h5 style="color: #FFF; font-weight: bold"><img src="{{ url('eye.png') }}" alt="" width="16"> Pengunjung Hari Ini : {{ $userToday }}</h5>
                <h5 style="color: #FFF; font-weight: bold"><img src="{{ url('eye.png') }}" alt="" width="16">Pengunjung Bulan Ini : {{ $userThisMonth }}</h5>
                <h5 style="color: #FFF; font-weight: bold"><img src="{{ url('eye.png') }}" alt="" width="16">Pengunjung Seluruhnya : {{ $user }}</h5>
            </div>
            <div class="bottom">
                <div class="d-flex justify-content-end">
                    <a href="{{ $link != '' ? $link->link : '#' }}" target="_blank">
                        <img src="{{ url('frontend/btn-tamu.png') }}" alt="" srcset="" width="450">
                    </a>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: -30px">
                    <a href="{{ route('tentang') }}">
                        <img src="{{ url('frontend/btn-tentang.png') }}" alt="" srcset="" width="350">
                    </a>
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
