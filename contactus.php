<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <title>The Change Initiative</title>
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- jQuery UI CDN -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app.js"></script>

</head>

<body class="homepage">
    <!-- header -->
    <header class="full">
        <div class="container">
            <div class="row">
                <a class="navbar-brand" href="./index.php">
            <img src="./img/main-logo.png"  height="50" alt="">
        </a>

                <ul id="header-menu" class="list-reset">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./who-are-we.php">Who We Are</a></li>
                    <li  class="selected"><a href="./contactus.php">Contact Us</a></li>
                </ul>
            </div>
    </header>
    <!--<nav class="navbar fixed-top navbar-expand-lg navbar-light justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="./index.php">
            <img src="./img/main-logo.png"  height="50" alt="">
        </a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./who-are-we.php">Who We Are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contactus.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>-->
    <div class="container main-info">
        <div class="jumbotron">
            <div class="row">
                <div class="col justify-content-center">
                    <h1 class="display-4">Contact Us</h1> Got a question ? Feedback? Awesome!
                    <p> Send your message in the form below and we will get back to you as early as possible. </p>
                    </br>
                    <form role="form" method="post" id="reused_form">
                        <div class="form-group">
                            <label for="name"><strong>Name:</strong></label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="name"><strong>Message:</strong></label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">SEND &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; ">
                        <h3>Sent your message successfully!</h3>
                    </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>

            </div>
            </br>
            </br>
            <h4><img src="./img/phone.svg" height="25">&nbsp;&nbsp;&nbsp;&nbsp;0418 713 824</h4>
            <h4><img src="./img/map-marker.svg" height="25">&nbsp;&nbsp;&nbsp;&nbsp;Level 2, 5 George Street </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;North Strathfield </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSW 2137</h4>
        </div>
    </div>
    <footer>
        <nav class="navbar fixed-bottom navbar-expand-lg navbar-light justify-content-center">
            <p>Copyright&copy; 2018 The Change Initiative</p>
            </div>
        </nav>
    </footer>
</body>

</html>
