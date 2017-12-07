<!DOCTYPE html>
<html lang="fr" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>viewHome</title>

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

    <div id="modalHome" class="text-center">
        <img src="img/transfire.png" alt="Logo">

        <div class="content-modal">
            <p>Mise en orbite réussie ...!</p>
        </div>

        <div class="content-button">
            <a href="/"><button>< Continuer</button></a>
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
                        {{ csrf_field() }}
                        <h1>Envoyez vos fichiers</h1>

                        <i class="fa fa-user prefix grey-text"></i>
                        <input placeholder="Nom" type="text" id="form3" name="name" class="form-control">
                        {!! $errors->first('name', '<p class="error">:message</p>') !!}
                        
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input placeholder="Email" type="email" id="form2" name="mail" class="form-control">

                        {!! $errors->first('mail', '<p class="error">:message</p>') !!}

                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea placeholder="Message" type="text" id="form8" name="message" class="md-textarea"></textarea>
                        {!! $errors->first('message', '<p class="error">:message</p>') !!}

                        <div class="file-field text-center">
                            <div class="btn btn-indigo lighten-2 btn-sm">
                                <input type="file" name="upload">
                            </div>
                        </div>
                    
                        <div class="text-center mt-5">
                            <button class="btn indigo lighten-2" type="submit">Uploadez</button>
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
