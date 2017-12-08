<!DOCTYPE html>
<html style="height: 100%;">
	<head>
		<meta charset="utf-8">
		<title>Email</title>
	</head>
	<body style="background-color: #333;text-align: center;height: 100%;padding: 7% 0;">
		
		<div class="email">
			
			<img style="max-width: 100%;width: 5%;" src="{{asset('img/transfire.png')}}" alt="Logo">

			<h1 style="color: #fff;">Transfire</h1>
			<p style="color: #fff">Vos fichiers restent au chaud pendant 7 jours !</p>

			<a href="{{asset('/uploads/'.$fichier)}}">Cliquez ici pour télécharger votre fichier</a>

		</div>
		
	</body>
</html>