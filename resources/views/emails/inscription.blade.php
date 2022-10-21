<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h1 class="text-center text-success" style="color:#108757">{{$data['header']}}</h1>
                <h4 class="text-center text-danger">Salut {{$data['name']}}</h4>
                <p class="text-center">
                {{$data['message']}} <br><br><br>    
                </p>

                <a href="http://connect.bj/" class="btn-lg btn-success" style="background-color: #108757;color:#fff">Visitez notre site</a>
            </div>
        </div>
    </div>
</body>

</html>