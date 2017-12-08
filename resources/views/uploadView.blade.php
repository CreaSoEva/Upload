<!DOCTYPE html>
<html lang="fr" class="full-height">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Upload | Transfire</title>
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
		
		<main>

	        <div class="container-fluid">
	            
	            <div class="row vertical-content">
	                
	                <div class="offset-md-2 col-md-4">

	                    <div class="white-text left">
	                        <h1 class="display-4 wow fadeInLeft text-center" data-wow-delay="0.3s">Transfire</h1>
	                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
	                        <h6 class="wow fadeInLeft text-center" data-wow-delay="0.3s">Expérimentez <strong>LA</strong> solution la plus simple pour transférer vos fichiers partout dans le monde à la vitesse de la lumière! Croyez-nous sur parole, c'est le FEU!!</h6>
	                        <br>
	                    </div>

	                </div>

	                <div class="col-md-4 right text-center">
	                    <form method="GET" action="{{ route('home') }}" enctype="multipart/form-data">
	                        {{ csrf_field() }}

	                        <img id="imgupload" src="{{asset('img/transfire.png')}}" alt="Logo" width="10%">
	                        <h1 id="titreupload">Vos fichiers ont été envoyés avec succès</h1>
	                        <p class="text-center textupload">Le destinataire recevra un email dans quelques instant</p>

							
	                    
	                        <div class="text-center mt-5">
	                            <button class="btn indigo lighten-2" type="submit">Retour à l'accueil</button>
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