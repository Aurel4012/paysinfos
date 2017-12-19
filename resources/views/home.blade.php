<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Accueil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	    <script src="https://use.fontawesome.com/ac27f63fe1.js"></script>
	    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
	</head>
	<body class="animated fadeIn">

		<div class="container-fluid">

			<div class="row text-center vertical-center">

				<div class="col-md-10">
					
					<h1 class="text-center">PaysInfos</h1>

					<select name="tag" class="mx-auto">
						<option value="name">Pays</option>
						<option value="capital">Capitale</option>
						<option value="region">Région</option>
						<option value="currencies">Monnaies</option>
					</select>

					<input name="search" type="text" class="mx-auto">

				</div>

			</div>

		</div>
	
		<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
	</body>
</html>