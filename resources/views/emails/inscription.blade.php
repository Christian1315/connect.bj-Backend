<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('LOGOS/LOCO CONNECT PNG.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        a{
            background-color: #000;
            color:white;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-decoration: none;
        }
    </style>

    <title>CONNECT.BJ</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <img src="{{asset('LOGOS/LOCO CONNECT PNG_croked.png')}}" width="200px" alt="" srcset="">
                <h1 class="text-center text-success">Votre inscription a été validée</h1>
                <h4 class="text-center text-danger">Salut {{$data['firstname']}}</h4>
                <p class="text-center">
                Votre inscription a été faite avec succès! <br><br><br>    
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis nihil inventore tempore ea atque incidunt? Numquam sint unde, ipsam, voluptas quia mollitia sunt vel labore sit, corporis quam doloremque laboriosam.</p>

                <a href="http://dev.innov-prime.com/" class="btn-lg btn-success">Visitez notre site</a>
            </div>
        </div>
    </div>
</body>

</html>