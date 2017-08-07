<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>


    <title>Title</title>

    <style>

        #sec3 {
            background-image: url("https://seeklogo.com/images/C/Coca-Cola-logo-DC8C29EF77-seeklogo.com.png");
            background-repeat: no-repeat;
            background-position: 95% 0%;
            padding:50px;
            background-size: contain;
            font-family: 'Oswald', sans-serif;
            border-style: solid;
            border-width: 4px;
            border-collapse: separate;
            border-spacing: 50px 50px;
        }
        footer , body{
            font-family: 'Oswald', sans-serif;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="img-responsive" style="width:40px; margin-top:-10px" src="https://seeklogo.com/images/C/Coca-Cola-logo-DC8C29EF77-seeklogo.com.png" > </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">History <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Branches</a></li>
                <li><a href="/join">Join Us</a></li>
            </ul>
            </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search For Products">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

        </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>
</body>
@yield('content')

    <hr>
    <footer>

        <p>Designed By <strong>Hussein Shabeeb</strong></p>
    </footer>

    <script src="        https://code.jquery.com/jquery-3.2.1.min.js  "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
@yield('footer')
</html>