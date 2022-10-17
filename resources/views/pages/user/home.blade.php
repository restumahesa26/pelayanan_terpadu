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
			background-image: url('{{ url('frontend/bg-polos.jpg') }}');
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
	</style>

	<link href="{{ url('frontend/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">

		</div>
	</main>
	<script src="{{ url('frontend/app.js') }}"></script>
</body>
<script>
	setTimeout(function () {
        window.location.href = "{{ route('home2') }}"; //will redirect to your blog page (an ex: blog.html)
    }, 2000);
</script>
</html>
