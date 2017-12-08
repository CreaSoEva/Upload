<!DOCTYPE html>
<html lang="fr" class="full-height">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>viewDownload</title>

	        <!-- SCRIPTS -->
	    <!-- JQuery -->
	    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>
	    <!-- Bootstrap tooltips -->
	    <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
	    <!-- MDB core JavaScript -->
	    <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <!-- Bootstrap core CSS -->
	    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	    <!-- Material Design Bootstrap -->
	    <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
	    <!-- Your custom styles (optional) -->
	    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	</head>
	<body>
		
		<div id="modalDownload" class="text-center">

	        <img src="img/transfire.png" alt="Logo">

	        <div class="content-modal">
	            <p>Echec du lancement<br>Mise à feu annulée...<br>Vos fichiers n'ont pas pu être téléchargés</p>
	        </div>

	        <div class="content-button">
	            <a href="{{route('home')}}"><button>< Retour à l'accueil</button></a>
	        </div>

    	</div>

	    <main>

	        <div class="container-fluid">
	            
	            <div class="row vertical-content">
	                
	                <div class="offset-md-2 col-md-4">

	                    <div class="white-text left">
	                        <h1 class="display-4 wow fadeInLeft text-center" data-wow-delay="0.3s">Transfire</h1>
	                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
	                        <h6 class="wow fadeInLeft text-center" data-wow-delay="0.3s">Expérimentez LA solution la plus simple pour transférer vos fichiers partout dans le monde à la vitesse de la lumière! Croyez-nous sur parole, c'est le FEU!!</h6>
	                        <br>
	                    </div>

	                </div>

	                <div class="col-md-4 right">
	                    <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
	                        
	                        <h1><i class="fa fa-download" aria-hidden="true"></i>Prêt ? Partez !</h1>

	                        <p class="text-center">Vos fichiers restent au chaud pendant 7 jours</p>
							
							<p>Message expéditeur</p>
							<p>Nom du fichier</p>
	                    
	                        <div class="text-center mt-5">
	                            <button class="btn indigo lighten-2" type="submit">Transfire</button>
	                            <hr>
	                        </div>

	                    </form>
	                </div>

	            </div><!--ROW-->

	        </div>

	    </main>
    
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

	</body>
</html>