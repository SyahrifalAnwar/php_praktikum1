<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title>Kantin NF</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com//docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<meta name="theme-color" content="#7952b3">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

</head>
<body class="bg-light">

	<div class="container">
		<main>
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="https://s-media-cache-ak0.pinimg.com/originals/40/1e/6c/401e6ce81c674e75a47683ed4d8c4db6.jpg" alt="" width="72">
				<h2>Nilai Anda</h2>
			</div>	
			<div class="card">
				
				<div class="card-body">
					<p class="card-text"><?php
					$proses= $_GET['proses'];
					$nama_siswa = $_GET['nama'];
					$mata_kuliah = $_GET['matkul'];
					$nilai_uts = $_GET['nilai_uts'];
					$nilai_uas = $_GET['nilai_uas'];
					$nilai_tugas = $_GET['nilai_tugas'];

					echo '<br/>Nama : '.$nama_siswa;
					echo '<br/>Mata Kuliah : '.$mata_kuliah;
					echo '<br/>Nilai UTS : '.$nilai_uts;
					echo '<br/>Nilai UAS : '.$nilai_uas;
					echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
					?></p>
					
				</div>
			</div>


		</main>


	</div>


	<script src="https://getbootstrap.com//docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<script src="form-validation.js"></script>
</body>
</html>



